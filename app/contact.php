
<?php
const RECIPIENT_EMAIL = 'kubalague@gmail.com'; // Twój adres odbiorczy
const SENDER_DOMAIN   = 'web-boost.pl';          // Twoja domena
// contact.php — obsługa formularza kontaktowego Web-Boost

declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');
header('X-Content-Type-Options: nosniff');

// ─── Konfiguracja ────────────────────────────────────────────────────────────
const RECIPIENT_EMAIL = 'kontakt@twojadomena.pl';   // <-- zmień na swój adres
const RECIPIENT_NAME  = 'Web-Boost';
const SENDER_DOMAIN   = 'twojadomena.pl';           // <-- zmień na swoją domenę
const RATE_LIMIT_FILE = __DIR__ . '/tmp/rate_limit.json';
const RATE_LIMIT_MAX  = 5;    // max zapytań z jednego IP
const RATE_LIMIT_TTL  = 600;  // w sekundach (10 minut)

// ─── Dozwolone wartości selecta ───────────────────────────────────────────────
const ALLOWED_SERVICES = [
    'website'     => 'Strona internetowa',
    'ecommerce'   => 'Sklep internetowy',
    'seo'         => 'Pozycjonowanie SEO',
    'ads'         => 'Google Ads / SEM',
    'content'     => 'Marketing treści',
    'maintenance' => 'Opieka techniczna',
    'other'       => 'Inne',
];

// ─── Funkcje pomocnicze ───────────────────────────────────────────────────────
function json_response(bool $success, string $message, int $status = 200): never
{
    http_response_code($status);
    echo json_encode(['success' => $success, 'message' => $message], JSON_UNESCAPED_UNICODE);
    exit;
}

function sanitize(string $value): string
{
    return htmlspecialchars(trim($value), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function check_rate_limit(string $ip): bool
{
    $dir = dirname(RATE_LIMIT_FILE);
    if (!is_dir($dir)) {
        mkdir($dir, 0750, true);
    }

    $data = [];
    if (file_exists(RATE_LIMIT_FILE)) {
        $raw = file_get_contents(RATE_LIMIT_FILE);
        $data = json_decode($raw ?: '{}', true) ?? [];
    }

    $now = time();
    // Wyczyść stare wpisy
    foreach ($data as $stored_ip => $entries) {
        $data[$stored_ip] = array_filter($entries, fn($t) => ($now - $t) < RATE_LIMIT_TTL);
        if (empty($data[$stored_ip])) {
            unset($data[$stored_ip]);
        }
    }

    $count = count($data[$ip] ?? []);
    if ($count >= RATE_LIMIT_MAX) {
        return false;
    }

    $data[$ip][] = $now;
    file_put_contents(RATE_LIMIT_FILE, json_encode($data), LOCK_EX);
    return true;
}

// ─── Tylko POST ───────────────────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    json_response(false, 'Niedozwolona metoda.', 405);
}

// ─── Sprawdzenie origin (CSRF) ────────────────────────────────────────────────
$origin   = $_SERVER['HTTP_ORIGIN']  ?? '';
$referer  = $_SERVER['HTTP_REFERER'] ?? '';
$host     = $_SERVER['HTTP_HOST']    ?? '';

$allowed_origin = 'https://' . SENDER_DOMAIN;
if ($origin && strpos($origin, $allowed_origin) !== 0
    && strpos($referer, $allowed_origin) !== 0) {
    json_response(false, 'Niedozwolone źródło żądania.', 403);
}

// ─── Rate limiting ────────────────────────────────────────────────────────────
$client_ip = $_SERVER['HTTP_X_FORWARDED_FOR']
    ? explode(',', $_SERVER['HTTP_X_FORWARDED_FOR'])[0]
    : ($_SERVER['REMOTE_ADDR'] ?? 'unknown');
$client_ip = trim($client_ip);

if (!check_rate_limit($client_ip)) {
    json_response(false, 'Zbyt wiele zapytań. Spróbuj ponownie za chwilę.', 429);
}

// ─── Odczyt i walidacja danych ────────────────────────────────────────────────
$name    = sanitize($_POST['name']    ?? '');
$email   = trim($_POST['email']       ?? '');
$phone   = sanitize($_POST['phone']   ?? '');
$service = trim($_POST['service']     ?? '');
$message = sanitize($_POST['message'] ?? '');
$consent = $_POST['consent']          ?? '';

$errors = [];

if (mb_strlen($name) < 2 || mb_strlen($name) > 100) {
    $errors[] = 'Imię i nazwisko jest wymagane (2–100 znaków).';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 254) {
    $errors[] = 'Podaj prawidłowy adres e-mail.';
}

if (!array_key_exists($service, ALLOWED_SERVICES)) {
    $errors[] = 'Wybierz jedną z dostępnych usług.';
}

if (empty($consent)) {
    $errors[] = 'Wymagana zgoda na przetwarzanie danych osobowych.';
}

if ($phone && !preg_match('/^[+\d\s\-().]{7,20}$/', $phone)) {
    $errors[] = 'Numer telefonu ma nieprawidłowy format.';
}

if (mb_strlen($message) > 5000) {
    $errors[] = 'Opis projektu nie może przekraczać 5000 znaków.';
}

if (!empty($errors)) {
    json_response(false, implode(' ', $errors), 422);
}

// ─── Honeypot (opcjonalne pole ukryte w HTML) ─────────────────────────────────
if (!empty($_POST['website_url'])) {
    // Bot wypełnił ukryte pole – cicho odrzucamy
    json_response(true, 'Dziękujemy! Odezwiemy się w ciągu 24 godzin.');
}

// ─── Przygotowanie e-maila ────────────────────────────────────────────────────
$service_label = ALLOWED_SERVICES[$service];
$email_safe    = filter_var($email, FILTER_SANITIZE_EMAIL);
$name_safe     = mb_encode_mimeheader($name, 'UTF-8', 'B');

$subject = '=?UTF-8?B?' . base64_encode("Nowe zapytanie: {$service_label} — {$name}") . '?=';

$body = <<<EOT
Nowe zapytanie kontaktowe z formularza Web-Boost
=================================================

Imię i nazwisko : {$name}
E-mail          : {$email}
Telefon         : {$phone}
Usługa          : {$service_label}

Opis projektu:
--------------
{$message}

=================================================
Data            : {$_SERVER['REQUEST_TIME']}
IP klienta      : {$client_ip}
EOT;

// Nagłówki e-maila
$headers  = "From: =?UTF-8?B?" . base64_encode("Formularz Web-Boost") . "?= <noreply@" . SENDER_DOMAIN . ">\r\n";
$headers .= "Reply-To: {$name_safe} <{$email_safe}>\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$headers .= "Content-Transfer-Encoding: base64\r\n";
$headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";

$encoded_body = chunk_split(base64_encode($body));

// ─── Wysyłka ──────────────────────────────────────────────────────────────────
$sent = mail(RECIPIENT_EMAIL, $subject, $encoded_body, $headers);

if (!$sent) {
    // Loguj błąd na serwerze (nie ujawniaj szczegółów klientowi)
    error_log("[Web-Boost contact] mail() failed for IP: {$client_ip}, email: {$email}");
    json_response(false, 'Wystąpił błąd serwera. Spróbuj ponownie lub napisz do nas bezpośrednio.', 500);
}

// ─── Opcjonalnie: wyślij kopię potwierdzającą do nadawcy ─────────────────────
$confirm_subject = '=?UTF-8?B?' . base64_encode('Potwierdzenie zapytania — Web-Boost') . '?=';
$confirm_body    = <<<EOT
Cześć {$name},

Dziękujemy za kontakt! Otrzymaliśmy Twoje zapytanie dotyczące usługi:
"{$service_label}"

Odezwiemy się w ciągu 24 godzin.

Z poważaniem,
Zespół Web-Boost
EOT;

$confirm_headers  = "From: =?UTF-8?B?" . base64_encode("Web-Boost") . "?= <noreply@" . SENDER_DOMAIN . ">\r\n";
$confirm_headers .= "MIME-Version: 1.0\r\n";
$confirm_headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
$confirm_headers .= "Content-Transfer-Encoding: base64\r\n";

mail($email_safe, $confirm_subject, chunk_split(base64_encode($confirm_body)), $confirm_headers);

json_response(true, 'Dziękujemy! Odezwiemy się w ciągu 24 godzin.');