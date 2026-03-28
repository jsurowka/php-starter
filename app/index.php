<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- SEO: Primary Meta Tags -->
    <title>Web-Boost | Tworzenie Stron Internetowych & Pozycjonowanie SEO</title>
    <meta name="description"
        content="Web-Boost to agencja tworzenia stron internetowych i pozycjonowania SEO. Tworzymy nowoczesne strony internetowe, sklepy online i strategie SEO, które napędzają wzrost Twojego biznesu." />
    <meta name="keywords"
        content="tworzenie stron internetowych, pozycjonowanie SEO, agencja web, sklepy internetowe, strony www, optymalizacja SEO, Web-Boost" />
    <meta name="author" content="Web-Boost" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://web-boost.pl/" />

    <!-- SEO: Open Graph / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://web-boost.pl/" />
    <meta property="og:title" content="Web-Boost | Tworzenie Stron Internetowych & Pozycjonowanie SEO" />
    <meta property="og:description"
        content="Nowoczesne strony internetowe i skuteczne pozycjonowanie SEO. Zwiększamy widoczność Twojej firmy w internecie." />
    <meta property="og:image" content="https://web-boost.pl/og-image.jpg" />
    <meta property="og:locale" content="pl_PL" />
    <meta property="og:site_name" content="Web-Boost" />

    <!-- SEO: Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="https://web-boost.pl/" />
    <meta name="twitter:title" content="Web-Boost | Tworzenie Stron Internetowych & Pozycjonowanie SEO" />
    <meta name="twitter:description"
        content="Nowoczesne strony internetowe i skuteczne pozycjonowanie SEO. Zwiększamy widoczność Twojej firmy w internecie." />
    <meta name="twitter:image" content="https://web-boost.pl/og-image.jpg" />

    <!-- Schema.org Structured Data -->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Web-Boost",
    "description": "Agencja tworzenia stron internetowych i pozycjonowania SEO",
    "url": "https://web-boost.pl",
    "logo": "https://web-boost.pl/logo.png",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+48-000-000-000",
      "contactType": "customer service",
      "areaServed": "PL",
      "availableLanguage": "Polish"
    },
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "PL"
    },
    "sameAs": [
      "https://twitter.com/webboost",
      "https://linkedin.com/company/webboost",
      "https://facebook.com/webboost"
    ],
    "serviceType": ["Tworzenie stron internetowych", "Pozycjonowanie SEO", "Sklepy internetowe"]
  }
  </script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>

    <!-- Google Fonts: Syne + Manrope -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=Manrope:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#38BDF8',
                        darkBg: '#080E1A',
                        darkCard: '#0D1626',
                    },
                    fontFamily: {
                        display: ['Syne', 'sans-serif'],
                        body: ['Manrope', 'sans-serif'],
                    },
                }
            }
        }
    </script>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Manrope', sans-serif;
            background-color: #080E1A;
            color: #CBD5E1;
        }

        /* ── Glassmorphism ── */
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        /* ── Gradient text ── */
        .grad-text {
            background: linear-gradient(135deg, #38BDF8 0%, #818CF8 60%, #C084FC 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        /* ── Animations ── */
        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-18px) rotate(1deg);
            }
        }

        @keyframes floatReverse {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(14px);
            }
        }

        @keyframes pulseGlow {

            0%,
            100% {
                opacity: 0.4;
                transform: scale(1);
            }

            50% {
                opacity: 0.7;
                transform: scale(1.05);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-12px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes spin-slow {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @keyframes counter {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes marquee {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        @keyframes gridPulse {

            0%,
            100% {
                opacity: 0.03;
            }

            50% {
                opacity: 0.07;
            }
        }

        .animate-float {
            animation: float 7s ease-in-out infinite;
        }

        .animate-float-r {
            animation: floatReverse 6s ease-in-out infinite;
        }

        .animate-glow {
            animation: pulseGlow 4s ease-in-out infinite;
        }

        .animate-spin-slow {
            animation: spin-slow 20s linear infinite;
        }

        .animate-marquee {
            animation: marquee 25s linear infinite;
        }

        /* ── Scroll Reveal ── */
        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.7s cubic-bezier(.16, 1, .3, 1), transform 0.7s cubic-bezier(.16, 1, .3, 1);
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-delay-1 {
            transition-delay: 0.1s;
        }

        .reveal-delay-2 {
            transition-delay: 0.2s;
        }

        .reveal-delay-3 {
            transition-delay: 0.3s;
        }

        .reveal-delay-4 {
            transition-delay: 0.4s;
        }

        /* ── Noise texture overlay ── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 512 512' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='1'/%3E%3C/svg%3E");
            opacity: 0.018;
            pointer-events: none;
            z-index: 9999;
        }

        /* ── Grid background ── */
        .grid-bg {
            background-image: linear-gradient(rgba(56, 189, 248, 0.04) 1px, transparent 1px),
                linear-gradient(90deg, rgba(56, 189, 248, 0.04) 1px, transparent 1px);
            background-size: 60px 60px;
            animation: gridPulse 6s ease-in-out infinite;
        }

        /* ── Nav active state ── */
        nav a.active {
            color: #38BDF8;
        }

        /* ── Mobile menu ── */
        #mobile-menu {
            display: none;
            animation: slideDown 0.25s ease;
        }

        #mobile-menu.open {
            display: block;
        }

        /* ── Service card border ── */
        .service-card {
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: border-color 0.3s, transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            border-color: rgba(56, 189, 248, 0.4);
            transform: translateY(-6px);
            box-shadow: 0 20px 60px rgba(56, 189, 248, 0.08);
        }

        /* ── Portfolio hover ── */
        .portfolio-item .overlay {
            opacity: 0;
            transition: opacity 0.4s;
        }

        .portfolio-item:hover .overlay {
            opacity: 1;
        }

        .portfolio-item img {
            transition: transform 0.6s cubic-bezier(.16, 1, .3, 1);
        }

        .portfolio-item:hover img {
            transform: scale(1.08);
        }

        /* ── Testimonial card ── */
        .testimonial-card {
            border: 1px solid rgba(255, 255, 255, 0.08);
            transition: border-color 0.3s, transform 0.3s;
        }

        .testimonial-card:hover {
            border-color: rgba(56, 189, 248, 0.3);
            transform: translateY(-4px);
        }

        /* ── Button hover ── */
        .btn-primary {
            background: linear-gradient(135deg, #38BDF8, #818CF8);
            transition: opacity 0.2s, transform 0.2s, box-shadow 0.2s;
        }

        .btn-primary:hover {
            opacity: 0.9;
            transform: translateY(-2px);
            box-shadow: 0 12px 40px rgba(56, 189, 248, 0.35);
        }

        /* ── Counter ── */
        .stat-num {
            font-family: 'Syne', sans-serif;
        }

        /* ── Input focus ── */
        input:focus,
        select:focus,
        textarea:focus {
            outline: none;
            border-color: #38BDF8 !important;
            box-shadow: 0 0 0 2px rgba(56, 189, 248, 0.15);
        }

        /* ── Marquee wrapper ── */
        .marquee-track {
            display: flex;
            width: max-content;
        }

        .marquee-wrap {
            overflow: hidden;
        }

        /* ── Custom scrollbar ── */
        ::-webkit-scrollbar {
            width: 6px;
        }

        ::-webkit-scrollbar-track {
            background: #080E1A;
        }

        ::-webkit-scrollbar-thumb {
            background: rgba(56, 189, 248, 0.3);
            border-radius: 3px;
        }

        /* ── Spinning ring ── */
        .spin-ring {
            border: 2px solid transparent;
            border-top-color: rgba(56, 189, 248, 0.4);
            border-right-color: rgba(129, 140, 248, 0.3);
        }

        /* ══ RWD FIXES ══ */
        /* Prevent logo text overflow on small screens */
        .logo-text {
            white-space: nowrap;
        }

        /* Hero h1 — fluid font scaling */
        @media (max-width: 400px) {
            .hero-h1 {
                font-size: 2.25rem !important;
                line-height: 1.1 !important;
            }
        }

        @media (max-width: 640px) {
            .hero-h1 {
                font-size: clamp(2rem, 8vw, 3rem) !important;
            }

            /* Marquee: reduce gap on mobile */
            .marquee-track>div {
                gap: 2rem !important;
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }

            /* Hero buttons: full width stack */
            .hero-btns {
                flex-direction: column !important;
            }

            .hero-btns a {
                width: 100% !important;
                justify-content: center !important;
            }
        }

        /* Navbar: prevent overflow */
        #navbar .max-w-7xl {
            min-width: 0;
        }

        /* Mobile menu z-index safety */
        #mobile-menu {
            position: relative;
            z-index: 49;
        }

        /* Touch targets minimum 44px */
        #hamburger {
            min-width: 44px;
            min-height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Process section: single column on xs */
        @media (max-width: 639px) {
            .process-grid {
                grid-template-columns: 1fr !important;
            }

            /* Timeline: tighter on mobile */
            .timeline-item {
                gap: 1rem !important;
            }

            /* Stats grid: 1 col on very small */
        }

        @media (max-width: 479px) {
            .stats-2col {
                grid-template-columns: 1fr !important;
            }
        }

        /* Portfolio filter: allow wrap on mobile */
        .filter-wrap {
            flex-wrap: wrap !important;
        }

        /* Prevent horizontal scroll from blobs */
        section {
            overflow-x: hidden;
        }

        /* Service cards: consistent min-height */
        .service-card {
            min-height: 0;
        }

        /* Images: never exceed container */
        img {
            max-width: 100%;
            height: auto;
        }

        /* Form: full width on mobile */
        @media (max-width: 767px) {
            .contact-grid {
                grid-template-columns: 1fr !important;
            }
        }

        /* Footer grid responsive */
        @media (max-width: 1023px) {
            .footer-grid {
                gap: 2rem !important;
            }
        }

        /* Back to top: safe position above mobile browser bar */
        #back-to-top {
            bottom: 1.5rem;
            right: 1rem;
        }

        @media (min-width: 640px) {
            #back-to-top {
                right: 1.5rem;
            }
        }

        /* Testimonial cards: consistent height */
        .testimonial-card {
            display: flex;
            flex-direction: column;
        }
    </style>
</head>

<body class="antialiased overflow-x-hidden">

    <!-- ═══════════════════════════════════════════
     NAVIGATION
════════════════════════════════════════════ -->
    <!-- ═══ NAV ═══ -->
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-300" aria-label="Nawigacja główna">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex justify-between items-center">
            <a href="index.html" class="flex items-center gap-2 group flex-shrink-0"
                aria-label="Web-Boost - strona główna">
                <img src="webboost2.png" alt="Web-Boost" class="h-8 w-auto"
                    style="filter:drop-shadow(0 0 8px rgba(56,189,248,0.3))" />
            </a>
            <div class="hidden md:flex items-center space-x-6 lg:space-x-8 text-sm font-medium">
                <a href="services.html" class="text-slate-400 hover:text-primary transition-colors">Usługi</a>
                <a href="portfolio.html" class="text-slate-400 hover:text-primary transition-colors">Realizacje</a>
                <a href="whyus.html" class="text-slate-400 hover:text-primary transition-colors">Dlaczego my</a>
                <a href="index.html#kontakt" class="text-primary font-semibold">Kontakt</a>
            </div>
            <a href="index.html#kontakt"
                class="hidden md:inline-flex btn-primary text-slate-900 px-4 lg:px-5 py-2.5 rounded-lg font-bold text-sm items-center gap-2 shadow-lg shadow-primary/20 flex-shrink-0 whitespace-nowrap">
                Bezpłatna wycena
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" />
                </svg>
            </a>
            <button id="hamburger" class="md:hidden text-slate-300 hover:text-primary transition-colors p-2"
                aria-label="Otwórz menu" aria-expanded="false" aria-controls="mobile-menu">
                <svg id="ham-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <!-- Mobile menu -->
        <div id="mobile-menu" class="glass border-t border-white/5" role="navigation" aria-label="Menu mobilne">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 py-6 flex flex-col gap-5 text-sm font-semibold">
                <a href="services.html" class="text-slate-300 hover:text-primary transition-colors"
                    onclick="closeMobile()">Usługi</a>
                <a href="portfolio.html" class="text-slate-300 hover:text-primary transition-colors"
                    onclick="closeMobile()">Realizacje</a>
                <a href="whyus.html" class="text-slate-300 hover:text-primary transition-colors"
                    onclick="closeMobile()">Dlaczego my</a>
                <a href="index.html#kontakt" class="text-primary" onclick="closeMobile()">Kontakt</a>
                <a href="index.html#kontakt"
                    class="btn-primary text-center text-slate-900 px-5 py-3 rounded-lg font-bold"
                    onclick="closeMobile()">Bezpłatna wycena</a>
            </div>
        </div>
    </nav>

    <!-- ═══════════════════════════════════════════
     HERO
════════════════════════════════════════════ -->
    <section class="relative min-h-screen flex items-center pt-24 pb-16 overflow-hidden" id="hero"
        aria-label="Sekcja główna">
        <!-- Background blobs -->
        <div class="absolute top-1/4 -left-32 w-[500px] h-[500px] bg-primary/8 rounded-full blur-[130px] animate-glow pointer-events-none"
            aria-hidden="true"></div>
        <div class="absolute bottom-1/4 -right-32 w-[450px] h-[450px] bg-indigo-500/8 rounded-full blur-[130px] animate-glow pointer-events-none"
            style="animation-delay:2s" aria-hidden="true"></div>
        <div class="absolute inset-0 grid-bg pointer-events-none" aria-hidden="true"></div>

        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-center relative z-10 w-full">

            <!-- Left: Content -->
            <div>
                <div
                    class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full glass border border-primary/20 text-primary text-xs font-semibold tracking-widest uppercase mb-8 reveal">
                    <span class="w-2 h-2 bg-primary rounded-full animate-pulse"></span>
                    Agencja Web & SEO
                </div>

                <h1
                    class="font-display text-5xl md:text-6xl xl:text-7xl font-bold text-white leading-[1.05] mb-6 reveal reveal-delay-1">
                    Strony, które<br />
                    <span class="grad-text">sprzedają.</span><br />
                    <span class="text-slate-300 font-display text-4xl md:text-5xl xl:text-6xl">SEO, które działa.</span>
                </h1>

                <p class="text-lg text-slate-400 mb-10 max-w-lg leading-relaxed reveal reveal-delay-2">
                    Tworzymy nowoczesne strony internetowe i sklepy online oraz skutecznie pozycjonujemy je w Google.
                    Twój sukces w sieci zaczyna się tutaj.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 reveal reveal-delay-3">
                    <a href="#kontakt"
                        class="btn-primary inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl font-bold text-slate-900 text-base shadow-xl shadow-primary/25">
                        Bezpłatna wycena
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                        </svg>
                    </a>
                    <a href="#realizacje"
                        class="inline-flex items-center justify-center gap-2 px-8 py-4 rounded-xl font-bold text-white text-base glass border border-white/10 hover:border-primary/30 transition-colors">
                        Zobacz realizacje
                    </a>
                </div>

                <!-- Trust bar -->
                <div class="flex items-center gap-6 mt-10 reveal reveal-delay-4">
                    <div class="flex -space-x-2">
                        <div
                            class="w-8 h-8 rounded-full bg-gradient-to-br from-primary to-indigo-500 border-2 border-darkBg">
                        </div>
                        <div
                            class="w-8 h-8 rounded-full bg-gradient-to-br from-indigo-500 to-purple-500 border-2 border-darkBg">
                        </div>
                        <div
                            class="w-8 h-8 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 border-2 border-darkBg">
                        </div>
                    </div>
                    <div class="flex items-center gap-1">
                        <div class="flex text-yellow-400" aria-label="Ocena 5 gwiazdek">
                            ★★★★★
                        </div>
                        <span class="text-slate-400 text-sm ml-1">Zaufało nam <strong class="text-white">120+</strong>
                            firm</span>
                    </div>
                </div>
            </div>

            <!-- Right: Floating mockup cards -->
            <div class="relative hidden lg:flex items-center justify-center" aria-hidden="true">
                <!-- Spinning ring -->
                <div class="absolute w-[420px] h-[420px] rounded-full spin-ring animate-spin-slow opacity-30"></div>

                <!-- Main browser mockup -->
                <div class="relative z-10 glass rounded-2xl w-full max-w-sm shadow-2xl animate-float">
                    <!-- Browser chrome -->
                    <div class="flex items-center gap-2 px-4 py-3 border-b border-white/5">
                        <div class="w-3 h-3 rounded-full bg-red-500/70"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500/70"></div>
                        <div class="w-3 h-3 rounded-full bg-green-500/70"></div>
                        <div class="flex-1 mx-3 bg-white/5 rounded px-3 py-1 text-xs text-slate-500 truncate">
                            https://twoja-firma.pl</div>
                    </div>
                    <!-- Mockup body -->
                    <div class="p-5 space-y-4">
                        <div class="h-3 w-2/3 bg-white/10 rounded-full"></div>
                        <div
                            class="h-28 w-full bg-gradient-to-br from-primary/15 to-indigo-500/15 rounded-xl border border-white/5 flex items-center justify-center">
                            <svg class="w-10 h-10 text-primary/40" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                            </svg>
                        </div>
                        <div class="grid grid-cols-3 gap-2">
                            <div class="h-3 bg-white/8 rounded-full"></div>
                            <div class="h-3 bg-white/8 rounded-full"></div>
                            <div class="h-3 bg-white/8 rounded-full"></div>
                        </div>
                        <div class="h-3 w-4/5 bg-white/5 rounded-full"></div>
                    </div>
                </div>

                <!-- Stats card -->
                <div
                    class="absolute -bottom-6 -left-12 glass rounded-2xl p-4 border border-primary/20 shadow-xl animate-float-r z-20">
                    <div class="flex items-center gap-3">
                        <div class="p-2.5 bg-primary/15 rounded-xl text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-500 uppercase tracking-widest">Wzrost organiczny</p>
                            <p class="text-xl font-display font-bold text-white">+187%</p>
                        </div>
                    </div>
                </div>

                <!-- SEO card -->
                <div class="absolute -top-4 -right-8 glass rounded-2xl p-4 border border-indigo-500/20 shadow-xl animate-float z-20"
                    style="animation-delay:1.5s">
                    <div class="flex items-center gap-3">
                        <div class="p-2.5 bg-indigo-500/15 rounded-xl text-indigo-400">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-[10px] text-slate-500 uppercase tracking-widest">Pozycja Google</p>
                            <p class="text-xl font-display font-bold text-white">#1 TOP</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     STATS MARQUEE
════════════════════════════════════════════ -->
    <div class="py-8 border-y border-white/5 bg-darkCard/60 overflow-hidden" aria-label="Statystyki firmy">
        <div class="marquee-wrap">
            <div class="marquee-track animate-marquee">
                <!-- repeated twice for seamless loop -->
                <div class="flex items-center gap-16 px-8 whitespace-nowrap">
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">120+</span> Zrealizowanych
                        projektów</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">98%</span> Zadowolonych klientów</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">5 lat</span> Doświadczenia</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">3x</span> Średni wzrost ruchu</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">48h</span> Czas pierwszej
                        odpowiedzi</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">TOP3</span> Pozycje w Google</span>
                    <span class="text-white/10">◆</span>
                </div>
                <div class="flex items-center gap-16 px-8 whitespace-nowrap" aria-hidden="true">
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">120+</span> Zrealizowanych
                        projektów</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">98%</span> Zadowolonych klientów</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">5 lat</span> Doświadczenia</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">3x</span> Średni wzrost ruchu</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">48h</span> Czas pierwszej
                        odpowiedzi</span>
                    <span class="text-white/10">◆</span>
                    <span class="flex items-center gap-3 text-slate-400 text-sm font-medium"><span
                            class="text-primary font-display font-bold text-2xl">TOP3</span> Pozycje w Google</span>
                    <span class="text-white/10">◆</span>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════════
     SERVICES
════════════════════════════════════════════ -->
    <section class="py-28 relative" id="uslugi" aria-labelledby="uslugi-heading">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-px bg-gradient-to-r from-transparent via-primary/30 to-transparent">
        </div>
        <div class="max-w-7xl mx-auto px-6">

            <div class="text-center mb-16 reveal">
                <span class="inline-block text-primary text-xs font-bold tracking-[0.2em] uppercase mb-4">Co
                    robimy</span>
                <h2 id="uslugi-heading" class="font-display text-3xl md:text-5xl font-bold text-white mb-5">Nasze usługi
                </h2>
                <p class="text-slate-400 max-w-2xl mx-auto text-lg">Kompleksowe usługi cyfrowe — od projektu po
                    pozycjonowanie. Wszystko, czego potrzebuje Twój biznes w sieci.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <article class="service-card glass rounded-2xl p-8 group reveal reveal-delay-1"
                    aria-label="Usługa: Strony Internetowe">
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-slate-900 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Strony Internetowe</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-5">Responsywne, błyskawicznie ładujące się
                        strony www stworzone z myślą o konwersji i wyróżnieniu Twojej marki.</p>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li class="flex items-center gap-2"><span class="text-primary">✓</span> Strony wizytówki</li>
                        <li class="flex items-center gap-2"><span class="text-primary">✓</span> Landing page</li>
                        <li class="flex items-center gap-2"><span class="text-primary">✓</span> Strony firmowe</li>
                    </ul>
                </article>

                <!-- Card 2 — featured -->
                <article
                    class="service-card glass rounded-2xl p-8 group relative overflow-hidden reveal reveal-delay-2 border-primary/25"
                    aria-label="Usługa: Sklepy Internetowe">
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/5 to-indigo-500/5 pointer-events-none">
                    </div>
                    <div
                        class="absolute top-4 right-4 px-2 py-0.5 bg-primary/15 text-primary text-[10px] font-bold rounded-full tracking-widest uppercase">
                        Popularny</div>
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-slate-900 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Sklepy Internetowe</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-5">Skalowalne e-commerce z intuicyjną ścieżką
                        zakupową, integracjami płatności i zarządzaniem asortymentem.</p>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li class="flex items-center gap-2"><span class="text-primary">✓</span> WooCommerce / Shopify
                        </li>
                        <li class="flex items-center gap-2"><span class="text-primary">✓</span> Integracje płatności
                        </li>
                        <li class="flex items-center gap-2"><span class="text-primary">✓</span> Zarządzanie produktami
                        </li>
                    </ul>
                </article>

                <!-- Card 3 -->
                <article class="service-card glass rounded-2xl p-8 group reveal reveal-delay-3"
                    aria-label="Usługa: Pozycjonowanie SEO">
                    <div
                        class="w-14 h-14 bg-primary/10 text-primary rounded-xl flex items-center justify-center mb-6 group-hover:bg-primary group-hover:text-slate-900 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Pozycjonowanie SEO</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-5">Strategiczne SEO lokalne i krajowe — audyty,
                        linkbuilding i optymalizacja treści, które dają mierzalne efekty.</p>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li class="flex items-center gap-2"><span class="text-primary">✓</span> Audyt SEO</li>
                        <li class="flex items-center gap-2"><span class="text-primary">✓</span> SEO lokalne</li>
                        <li class="flex items-center gap-2"><span class="text-primary">✓</span> Linkbuilding</li>
                    </ul>
                </article>

                <!-- Card 4 -->
                <article class="service-card glass rounded-2xl p-8 group reveal reveal-delay-1"
                    aria-label="Usługa: Marketing Treści">
                    <div
                        class="w-14 h-14 bg-purple-500/10 text-purple-400 rounded-xl flex items-center justify-center mb-6 group-hover:bg-purple-500 group-hover:text-slate-900 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Marketing Treści</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-5">Copywriting i content marketing nastawiony na
                        SEO — teksty, które przyciągają klientów i budują autorytet marki.</p>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li class="flex items-center gap-2"><span class="text-purple-400">✓</span> Copywriting SEO</li>
                        <li class="flex items-center gap-2"><span class="text-purple-400">✓</span> Blog firmowy</li>
                        <li class="flex items-center gap-2"><span class="text-purple-400">✓</span> Opisy produktów</li>
                    </ul>
                </article>

                <!-- Card 5 -->
                <article class="service-card glass rounded-2xl p-8 group reveal reveal-delay-2"
                    aria-label="Usługa: Google Ads">
                    <div
                        class="w-14 h-14 bg-yellow-500/10 text-yellow-400 rounded-xl flex items-center justify-center mb-6 group-hover:bg-yellow-500 group-hover:text-slate-900 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5" />
                            <path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" stroke-linecap="round"
                                stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Google Ads & SEM</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-5">Kampanie reklamowe w Google z maksymalnym ROI
                        — szybkie efekty w połączeniu z długofalowym SEO.</p>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Google Ads</li>
                        <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Remarketing</li>
                        <li class="flex items-center gap-2"><span class="text-yellow-400">✓</span> Optymalizacja
                            kampanii</li>
                    </ul>
                </article>

                <!-- Card 6 -->
                <article class="service-card glass rounded-2xl p-8 group reveal reveal-delay-3"
                    aria-label="Usługa: Opieka techniczna">
                    <div
                        class="w-14 h-14 bg-green-500/10 text-green-400 rounded-xl flex items-center justify-center mb-6 group-hover:bg-green-500 group-hover:text-slate-900 transition-all duration-300 group-hover:scale-110">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" />
                        </svg>
                    </div>
                    <h3 class="font-display text-xl font-bold text-white mb-3">Opieka Techniczna</h3>
                    <p class="text-slate-400 text-sm leading-relaxed mb-5">Bezpieczny hosting, aktualizacje, monitoring
                        i wsparcie techniczne — Twoja strona zawsze sprawna i chroniona.</p>
                    <ul class="space-y-2 text-sm text-slate-500">
                        <li class="flex items-center gap-2"><span class="text-green-400">✓</span> Hosting premium</li>
                        <li class="flex items-center gap-2"><span class="text-green-400">✓</span> Kopie bezpieczeństwa
                        </li>
                        <li class="flex items-center gap-2"><span class="text-green-400">✓</span> Wsparcie 24/7</li>
                    </ul>
                </article>

            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     WHY US
════════════════════════════════════════════ -->
    <section class="py-28 bg-darkCard/40 relative" id="dlaczego-my" aria-labelledby="why-heading">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-px bg-gradient-to-r from-transparent via-indigo-500/30 to-transparent">
        </div>
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-20 items-center">

            <!-- Left -->
            <div>
                <span
                    class="inline-block text-primary text-xs font-bold tracking-[0.2em] uppercase mb-4 reveal">Dlaczego
                    my</span>
                <h2 id="why-heading"
                    class="font-display text-3xl md:text-5xl font-bold text-white mb-12 reveal reveal-delay-1">
                    Dlaczego wiodące firmy<br />
                    <span class="grad-text">wybierają Web-Boost.</span>
                </h2>

                <div class="space-y-8">
                    <div class="flex gap-5 reveal reveal-delay-1">
                        <div
                            class="flex-shrink-0 w-11 h-11 bg-primary/10 border border-primary/20 rounded-full flex items-center justify-center text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1.5">Błyskawiczna wydajność</h4>
                            <p class="text-slate-400 text-sm leading-relaxed">Nasz kod jest zoptymalizowany pod Core Web
                                Vitals — strony ładują się w ułamku sekundy, co poprawia rankingi Google i doświadczenie
                                użytkownika.</p>
                        </div>
                    </div>

                    <div class="flex gap-5 reveal reveal-delay-2">
                        <div
                            class="flex-shrink-0 w-11 h-11 bg-primary/10 border border-primary/20 rounded-full flex items-center justify-center text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1.5">Mierzalne wyniki</h4>
                            <p class="text-slate-400 text-sm leading-relaxed">Raportujemy wyniki w sposób przejrzysty —
                                pozycje w Google, ruch organiczny, konwersje. Wiesz dokładnie, za co płacisz.</p>
                        </div>
                    </div>

                    <div class="flex gap-5 reveal reveal-delay-3">
                        <div
                            class="flex-shrink-0 w-11 h-11 bg-primary/10 border border-primary/20 rounded-full flex items-center justify-center text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path
                                    d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1.5">Kompleksowa obsługa</h4>
                            <p class="text-slate-400 text-sm leading-relaxed">Jesteśmy partnerem, nie tylko wykonawcą.
                                Prowadzimy Cię przez cały proces — od projektu po pozycjonowanie i wsparcie techniczne.
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-5 reveal reveal-delay-4">
                        <div
                            class="flex-shrink-0 w-11 h-11 bg-primary/10 border border-primary/20 rounded-full flex items-center justify-center text-primary">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-white font-bold mb-1.5">Terminowość i komunikacja</h4>
                            <p class="text-slate-400 text-sm leading-relaxed">Dotrzymujemy terminów i jesteśmy zawsze w
                                kontakcie. Żadnych niespodzianek, żadnego czekania tygodniami na odpowiedź.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right: stats grid -->
            <div class="grid grid-cols-2 gap-5 reveal reveal-delay-2">
                <div class="glass rounded-2xl p-6 border border-white/5 text-center">
                    <p class="font-display text-4xl font-bold grad-text mb-2">120+</p>
                    <p class="text-slate-400 text-sm">Projektów ukończonych</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-white/5 text-center">
                    <p class="font-display text-4xl font-bold grad-text mb-2">98%</p>
                    <p class="text-slate-400 text-sm">Klientów poleca nas dalej</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-white/5 text-center">
                    <p class="font-display text-4xl font-bold grad-text mb-2">3x</p>
                    <p class="text-slate-400 text-sm">Średni wzrost ruchu SEO</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-white/5 text-center">
                    <p class="font-display text-4xl font-bold grad-text mb-2">5 lat</p>
                    <p class="text-slate-400 text-sm">Doświadczenia w branży</p>
                </div>
                <!-- CTA bottom -->
                <div
                    class="col-span-2 glass rounded-2xl p-6 border border-primary/15 bg-primary/3 flex items-center gap-4">
                    <div class="p-3 bg-primary/15 rounded-xl text-primary flex-shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-white font-bold text-sm mb-0.5">Gwarancja jakości</p>
                        <p class="text-slate-400 text-xs">Jeśli nie jesteś zadowolony z pierwszych 30 dni — zwracamy
                            pieniądze.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     PORTFOLIO
════════════════════════════════════════════ -->
    <section class="py-28 relative" id="realizacje" aria-labelledby="portfolio-heading">
        <div class="max-w-7xl mx-auto px-6">

            <div class="flex flex-col md:flex-row justify-between items-end mb-14 gap-6 reveal">
                <div>
                    <span class="inline-block text-primary text-xs font-bold tracking-[0.2em] uppercase mb-4">Nasze
                        prace</span>
                    <h2 id="portfolio-heading" class="font-display text-3xl md:text-5xl font-bold text-white mb-4">
                        Realizacje</h2>
                    <p class="text-slate-400 max-w-md">Wybrane projekty pokazujące nasz poziom i podejście do każdego
                        zlecenia.</p>
                </div>
                <a href="#kontakt"
                    class="text-primary font-semibold flex items-center gap-2 hover:gap-3 transition-all text-sm">
                    Omów swój projekt
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                        <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" />
                    </svg>
                </a>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- Project 1 -->
                <article
                    class="portfolio-item group relative overflow-hidden rounded-2xl border border-white/5 reveal reveal-delay-1"
                    aria-label="Projekt: Sklep Modowy Premium">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDenG_QCt2WlzTWYQ8jDiMUEVYMaXLEnlbGmz7AZ9n4Ut85sUnpTi0BxWRleyP2sqX9ISFpd6QoHphEAgvwGpF9wFtLtb5N3LDQrIiJc6ZHILPriRmCpzbGidvZhIiA4sZm58sMsXCQNFH6Y25gnpxBUzUkp6u_BdJzjnVK1btMeGq-2X4ano0C70tO8UVGEVh1cOHviquY0cjeKq-IfcdvyHMxEfogPN1HTol8axpcdf67ImZDFaGkrzFzdzuuQ76EArXF-LIaGkzn"
                        alt="Sklep internetowy z modą premium – realizacja Web-Boost"
                        class="w-full aspect-video object-cover" loading="lazy" />
                    <div
                        class="overlay absolute inset-0 bg-gradient-to-t from-darkBg/95 via-darkBg/40 to-transparent flex flex-col justify-end p-6">
                        <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">E-commerce</span>
                        <h4 class="text-white text-xl font-display font-bold">Sklep Modowy Premium</h4>
                        <p class="text-slate-400 text-xs mt-1">Wzrost sprzedaży o 65% w 3 miesiące</p>
                    </div>
                </article>

                <!-- Project 2 -->
                <article
                    class="portfolio-item group relative overflow-hidden rounded-2xl border border-white/5 reveal reveal-delay-2"
                    aria-label="Projekt: Platforma SaaS Analytics">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBZeRj_s9JG6zrn9nEoBBj79y0bQYc43y-ZxaQzLhT78XeQX_YiMYTeck59yTu6Gqk_q51ZVPO98dFhK69-PTuMEBx4ywsLf6k7MlOpVzVxRsIXqp3vJtNHSnGdqwL3rrKQCqRgxrPMF91RESYvDhXTmSZrGPrxqPqizfH8MUjMCzyhLoCdX--4Ps1lqdnburDkAypUXdDuaEMvWOMr07Pc2Wz7i7oV_Yezf4Ee5BLB32IMAjpfJwfLvkZR0LM2jmJoMpqwu6bnhoT"
                        alt="Platforma SaaS do analizy danych – realizacja Web-Boost"
                        class="w-full aspect-video object-cover" loading="lazy" />
                    <div
                        class="overlay absolute inset-0 bg-gradient-to-t from-darkBg/95 via-darkBg/40 to-transparent flex flex-col justify-end p-6">
                        <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">SaaS</span>
                        <h4 class="text-white text-xl font-display font-bold">Platforma DataFlow</h4>
                        <p class="text-slate-400 text-xs mt-1">Pozycja #1 w Google na 40 fraz kluczowych</p>
                    </div>
                </article>

                <!-- Project 3 -->
                <article
                    class="portfolio-item group relative overflow-hidden rounded-2xl border border-white/5 reveal reveal-delay-3"
                    aria-label="Projekt: Strona marki audio">
                    <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuABtuQdXkPEM1j_F2lyO9EbnquGf-j-GbVwSDeLZTKUBMWVuEZQHe-BjpJUVQFa2lZDiqlYCPiGBHFxcCoGe_uVEbRZN1k-XCm5ui8KHYiIQp62LZ7ha4fVq80U6Xe-fpC98hPCAA-po8_zOpE1PZFJGMfYPVJFp64Y1TPV3fqfSUheMaZXv8ilAqfV7v6CZgi6WRCgm4JB8uqLufhWGYSEdaXmqjIuqP0lORZeakzt89OffpExpMLD6pEAn8V-vD3ctomyPFamMhmC"
                        alt="Strona marki audio – realizacja Web-Boost" class="w-full aspect-video object-cover"
                        loading="lazy" />
                    <div
                        class="overlay absolute inset-0 bg-gradient-to-t from-darkBg/95 via-darkBg/40 to-transparent flex flex-col justify-end p-6">
                        <span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">Branding</span>
                        <h4 class="text-white text-xl font-display font-bold">Sonic Audio Brand</h4>
                        <p class="text-slate-400 text-xs mt-1">+230% ruchu organicznego w 6 miesięcy</p>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     PROCESS
════════════════════════════════════════════ -->
    <section class="py-28 bg-darkCard/40 relative" aria-labelledby="process-heading">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <span class="inline-block text-primary text-xs font-bold tracking-[0.2em] uppercase mb-4">Jak
                    działamy</span>
                <h2 id="process-heading" class="font-display text-3xl md:text-5xl font-bold text-white mb-5">Prosty
                    proces,<br /><span class="grad-text">świetne efekty.</span></h2>
            </div>

            <div class="grid md:grid-cols-4 gap-6">
                <div class="glass rounded-2xl p-6 border border-white/5 text-center reveal reveal-delay-1">
                    <div
                        class="w-12 h-12 rounded-full bg-primary/15 text-primary font-display font-bold text-xl flex items-center justify-center mx-auto mb-4">
                        1</div>
                    <h4 class="text-white font-bold mb-2">Bezpłatna konsultacja</h4>
                    <p class="text-slate-400 text-sm">Omawiamy Twoje cele, budżet i potrzeby. Zero zobowiązań.</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-white/5 text-center reveal reveal-delay-2">
                    <div
                        class="w-12 h-12 rounded-full bg-primary/15 text-primary font-display font-bold text-xl flex items-center justify-center mx-auto mb-4">
                        2</div>
                    <h4 class="text-white font-bold mb-2">Projekt & Strategia</h4>
                    <p class="text-slate-400 text-sm">Tworzymy projekt graficzny i strategię SEO dostosowaną do Twojej
                        branży.</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-white/5 text-center reveal reveal-delay-3">
                    <div
                        class="w-12 h-12 rounded-full bg-primary/15 text-primary font-display font-bold text-xl flex items-center justify-center mx-auto mb-4">
                        3</div>
                    <h4 class="text-white font-bold mb-2">Realizacja</h4>
                    <p class="text-slate-400 text-sm">Budujemy stronę i wdrażamy SEO. Regularnie informujemy o
                        postępach.</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-white/5 text-center reveal reveal-delay-4">
                    <div
                        class="w-12 h-12 rounded-full bg-primary/15 text-primary font-display font-bold text-xl flex items-center justify-center mx-auto mb-4">
                        4</div>
                    <h4 class="text-white font-bold mb-2">Wdrożenie & Wzrost</h4>
                    <p class="text-slate-400 text-sm">Uruchamiamy projekt i monitorujemy wyniki, optymalizując na
                        bieżąco.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     TESTIMONIALS
════════════════════════════════════════════ -->
    <section class="py-28" id="opinie" aria-labelledby="testimonials-heading">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <span class="inline-block text-primary text-xs font-bold tracking-[0.2em] uppercase mb-4">Opinie
                    klientów</span>
                <h2 id="testimonials-heading" class="font-display text-3xl md:text-5xl font-bold text-white mb-5">Co
                    mówią nasi klienci</h2>
                <p class="text-slate-400">Nie wierz nam na słowo — przeczytaj opinie firm, które z nami współpracują.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">

                <article class="testimonial-card glass rounded-2xl p-6 reveal reveal-delay-1">
                    <div class="flex text-yellow-400 mb-4" aria-label="Ocena 5 gwiazdek">★★★★★</div>
                    <blockquote class="text-slate-300 italic mb-6 leading-relaxed text-sm">„Web-Boost całkowicie
                        przebudował nasz sklep. W ciągu 3 miesięcy nasz ruch podwoił się, a sprzedaż wzrosła o 65%.
                        Niesamowite efekty!"</blockquote>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-primary to-indigo-500 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                            AK</div>
                        <div>
                            <p class="text-white font-bold text-sm">Anna Kowalska</p>
                            <p class="text-slate-500 text-xs">CEO, ModaOnline.pl</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card glass rounded-2xl p-6 reveal reveal-delay-2">
                    <div class="flex text-yellow-400 mb-4" aria-label="Ocena 5 gwiazdek">★★★★★</div>
                    <blockquote class="text-slate-300 italic mb-6 leading-relaxed text-sm">„Profesjonalizm i skuteczność
                        na najwyższym poziomie. Dzięki pozycjonowaniu Web-Boost jesteśmy #1 w Google na nasze główne
                        frazy. Polecam!"</blockquote>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-indigo-500 to-purple-500 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                            MN</div>
                        <div>
                            <p class="text-white font-bold text-sm">Marcin Nowak</p>
                            <p class="text-slate-500 text-xs">Właściciel, TechService24</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card glass rounded-2xl p-6 reveal reveal-delay-3">
                    <div class="flex text-yellow-400 mb-4" aria-label="Ocena 5 gwiazdek">★★★★★</div>
                    <blockquote class="text-slate-300 italic mb-6 leading-relaxed text-sm">„Strona gotowa w terminie,
                        wygląda świetnie i szybko się ładuje. SEO przyniosło efekty już po 2 miesiącach. Bardzo polecam
                        tę agencję!"</blockquote>
                    <div class="flex items-center gap-4">
                        <div
                            class="w-10 h-10 rounded-full bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                            KW</div>
                        <div>
                            <p class="text-white font-bold text-sm">Katarzyna Wiśniewska</p>
                            <p class="text-slate-500 text-xs">Dyrektor, PulseMedia Polska</p>
                        </div>
                    </div>
                </article>

            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     CONTACT
════════════════════════════════════════════ -->
    <section class="py-28 bg-darkCard/40 relative" id="kontakt" aria-labelledby="contact-heading">
        <div
            class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-px bg-gradient-to-r from-transparent via-primary/30 to-transparent">
        </div>
        <div class="max-w-7xl mx-auto px-6 grid lg:grid-cols-2 gap-16 items-start">

            <!-- Left -->
            <div class="reveal">
                <span class="inline-block text-primary text-xs font-bold tracking-[0.2em] uppercase mb-4">Napisz do
                    nas</span>
                <h2 id="contact-heading" class="font-display text-3xl md:text-5xl font-bold text-white mb-6">
                    Zbudujmy razem coś<br /><span class="grad-text">wyjątkowego.</span>
                </h2>
                <p class="text-slate-400 mb-10 max-w-md leading-relaxed">Chcesz nową stronę, lepsze pozycje w Google lub
                    po prostu porozmawiać o możliwościach? Napisz do nas — odpowiadamy w ciągu 24 godzin.</p>

                <div class="space-y-5">
                    <a href="mailto:kontakt@web-boost.pl"
                        class="flex items-center gap-4 text-slate-300 hover:text-primary transition-colors group">
                        <div
                            class="w-10 h-10 glass rounded-xl flex items-center justify-center text-primary group-hover:bg-primary/15 transition-colors flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span class="text-sm">kontakt@web-boost.pl</span>
                    </a>

                    <a href="tel:+48000000000"
                        class="flex items-center gap-4 text-slate-300 hover:text-primary transition-colors group">
                        <div
                            class="w-10 h-10 glass rounded-xl flex items-center justify-center text-primary group-hover:bg-primary/15 transition-colors flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span class="text-sm">+48 000 000 000</span>
                    </a>

                    <div class="flex items-center gap-4 text-slate-300">
                        <div
                            class="w-10 h-10 glass rounded-xl flex items-center justify-center text-primary flex-shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
                            </svg>
                        </div>
                        <span class="text-sm">Warszawa, Polska (obsługujemy całą Polskę)</span>
                    </div>
                </div>
            </div>

            <!-- Right: Form -->
            <div class="glass rounded-2xl p-8 border border-white/8 reveal reveal-delay-2">
                <form id="contact-form" novalidate aria-label="Formularz kontaktowy" methgod="POST"
                    action="contact.php">
                    <div class="grid md:grid-cols-2 gap-5 mb-5">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-slate-300 mb-2">Imię i nazwisko
                                <span class="text-red-400" aria-label="wymagane">*</span></label>
                            <input id="name" name="name" type="text" required placeholder="Jan Kowalski"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white text-sm placeholder-slate-600 transition-all" />
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold text-slate-300 mb-2">E-mail <span
                                    class="text-red-400" aria-label="wymagane">*</span></label>
                            <input id="email" name="email" type="email" required placeholder="jan@firma.pl"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white text-sm placeholder-slate-600 transition-all" />
                        </div>
                    </div>

                    <div class="mb-5">
                        <label for="phone" class="block text-sm font-semibold text-slate-300 mb-2">Telefon</label>
                        <input id="phone" name="phone" type="tel" placeholder="+48 000 000 000"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white text-sm placeholder-slate-600 transition-all" />
                    </div>

                    <div class="mb-5">
                        <label for="service" class="block text-sm font-semibold text-slate-300 mb-2">Czego potrzebujesz?
                            <span class="text-red-400" aria-label="wymagane">*</span></label>
                        <select id="service" name="service" required
                            class="w-full bg-darkBg border border-white/10 rounded-xl px-4 py-3 text-white text-sm transition-all">
                            <option value="" class="bg-darkBg text-slate-500">Wybierz usługę...</option>
                            <option value="website" class="bg-darkBg">Strona internetowa</option>
                            <option value="ecommerce" class="bg-darkBg">Sklep internetowy</option>
                            <option value="seo" class="bg-darkBg">Pozycjonowanie SEO</option>
                            <option value="ads" class="bg-darkBg">Google Ads / SEM</option>
                            <option value="content" class="bg-darkBg">Marketing treści</option>
                            <option value="maintenance" class="bg-darkBg">Opieka techniczna</option>
                            <option value="other" class="bg-darkBg">Inne</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-sm font-semibold text-slate-300 mb-2">Opisz swój
                            projekt</label>
                        <textarea id="message" name="message" rows="4"
                            placeholder="Opowiedz nam o swoim projekcie, celach i budżecie..."
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white text-sm placeholder-slate-600 transition-all resize-none"></textarea>
                    </div>

                    <!-- Consent -->
                    <label class="flex items-start gap-3 mb-6 cursor-pointer group">
                        <input type="checkbox" required class="mt-1 w-4 h-4 rounded accent-primary flex-shrink-0" />
                        <span class="text-slate-500 text-xs leading-relaxed">Wyrażam zgodę na przetwarzanie moich danych
                            osobowych przez Web-Boost w celu odpowiedzi na zapytanie, zgodnie z <a href="#"
                                class="text-primary hover:underline">Polityką Prywatności</a>.</span>
                    </label>

                    <button type="submit"
                        class="w-full btn-primary py-4 rounded-xl font-bold text-slate-900 text-base flex items-center justify-center gap-2">
                        Wyślij zapytanie
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" />
                        </svg>
                    </button>
                    <div id="form-success" class="hidden mt-4 text-center text-green-400 text-sm font-semibold"
                        role="alert">
                        ✓ Dziękujemy! Odezwiemy się w ciągu 24 godzin.
                    </div>
                    <div id="form-error" class="hidden mt-4 text-center text-red-400 text-sm" role="alert">
                        Proszę wypełnić wszystkie wymagane pola.
                    </div>
                </form>
            </div>

        </div>
    </section>

    <!-- ═══════════════════════════════════════════
     FOOTER
════════════════════════════════════════════ -->
    <footer class="border-t border-white/5 bg-darkBg" aria-label="Stopka strony">

        <!-- Main footer content -->
        <div class="max-w-7xl mx-auto px-6 py-16">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">

                <!-- Col 1: Brand -->
                <div class="lg:col-span-1">
                    <a href="#" class="flex items-center gap-2.5 mb-5" aria-label="Web-Boost">
                        <div
                            class="w-9 h-9 bg-gradient-to-br from-primary to-indigo-500 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-slate-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                aria-hidden="true">
                                <path d="M13 10V3L4 14h7v7l9-11h-7z" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2.5" />
                            </svg>
                        </div>
                        <span class="font-display text-xl font-bold text-white">Web<span
                                class="text-primary">-Boost</span></span>
                    </a>
                    <p class="text-slate-500 text-sm leading-relaxed mb-6">Agencja tworzenia stron internetowych i
                        pozycjonowania SEO. Pomagamy firmom rosnąć w sieci.</p>
                    <div class="flex items-center gap-1 text-yellow-400 text-sm mb-1" aria-label="Ocena 5 gwiazdek">
                        ★★★★★</div>
                    <p class="text-slate-500 text-xs">4.9/5 — opinie klientów</p>
                </div>

                <!-- Col 2: Services -->
                <div>
                    <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-5">Usługi</h3>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li><a href="#uslugi" class="hover:text-primary transition-colors">Tworzenie stron www</a></li>
                        <li><a href="#uslugi" class="hover:text-primary transition-colors">Sklepy internetowe</a></li>
                        <li><a href="#uslugi" class="hover:text-primary transition-colors">Pozycjonowanie SEO</a></li>
                        <li><a href="#uslugi" class="hover:text-primary transition-colors">Google Ads & SEM</a></li>
                        <li><a href="#uslugi" class="hover:text-primary transition-colors">Marketing treści</a></li>
                        <li><a href="#uslugi" class="hover:text-primary transition-colors">Opieka techniczna</a></li>
                    </ul>
                </div>

                <!-- Col 3: Company -->
                <div>
                    <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-5">Firma</h3>
                    <ul class="space-y-3 text-sm text-slate-400">
                        <li><a href="#dlaczego-my" class="hover:text-primary transition-colors">O nas</a></li>
                        <li><a href="#realizacje" class="hover:text-primary transition-colors">Realizacje</a></li>
                        <li><a href="#opinie" class="hover:text-primary transition-colors">Opinie klientów</a></li>
                        <li><a href="#kontakt" class="hover:text-primary transition-colors">Kontakt</a></li>
                        <li><a href="#" class="hover:text-primary transition-colors">Polityka prywatności</a></li>
                    </ul>
                </div>

                <!-- Col 4: Contact -->
                <div>
                    <h3 class="text-white font-bold text-sm uppercase tracking-widest mb-5">Kontakt</h3>
                    <ul class="space-y-4 text-sm text-slate-400">
                        <li>
                            <a href="mailto:kontakt@web-boost.pl"
                                class="flex items-start gap-3 hover:text-primary transition-colors">
                                <svg class="w-4 h-4 mt-0.5 text-primary flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </svg>
                                kontakt@web-boost.pl
                            </a>
                        </li>
                        <li>
                            <a href="tel:+48000000000"
                                class="flex items-start gap-3 hover:text-primary transition-colors">
                                <svg class="w-4 h-4 mt-0.5 text-primary flex-shrink-0" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24" aria-hidden="true">
                                    <path
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                </svg>
                                +48 000 000 000
                            </a>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg class="w-4 h-4 mt-0.5 text-primary flex-shrink-0" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                    stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                <path d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2" />
                            </svg>
                            Warszawa, Polska
                        </li>
                    </ul>

                    <!-- Social media -->
                    <div class="flex gap-3 mt-6">
                        <a href="https://facebook.com/webboost" target="_blank" rel="noopener noreferrer"
                            class="w-9 h-9 glass rounded-lg flex items-center justify-center text-slate-400 hover:text-primary hover:border-primary/30 border border-white/5 transition-all"
                            aria-label="Facebook Web-Boost">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                            </svg>
                        </a>
                        <a href="https://linkedin.com/company/webboost" target="_blank" rel="noopener noreferrer"
                            class="w-9 h-9 glass rounded-lg flex items-center justify-center text-slate-400 hover:text-primary hover:border-primary/30 border border-white/5 transition-all"
                            aria-label="LinkedIn Web-Boost">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                            </svg>
                        </a>
                        <a href="https://instagram.com/webboost" target="_blank" rel="noopener noreferrer"
                            class="w-9 h-9 glass rounded-lg flex items-center justify-center text-slate-400 hover:text-primary hover:border-primary/30 border border-white/5 transition-all"
                            aria-label="Instagram Web-Boost">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                <path
                                    d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bottom bar -->
        <div class="border-t border-white/5">
            <div class="max-w-7xl mx-auto px-6 py-6 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-slate-600 text-sm">© <span id="footer-year">2025</span> Web-Boost. Wszelkie prawa
                    zastrzeżone.</p>
                <div class="flex items-center gap-6 text-slate-600 text-sm">
                    <a href="#" class="hover:text-slate-400 transition-colors">Polityka prywatności</a>
                    <a href="#" class="hover:text-slate-400 transition-colors">Regulamin</a>
                    <a href="#" class="hover:text-slate-400 transition-colors">RODO</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to top -->
    <a href="#hero" id="back-to-top"
        class="fixed bottom-6 right-6 z-40 w-11 h-11 glass rounded-full border border-white/10 flex items-center justify-center text-primary hover:bg-primary/15 transition-all opacity-0 pointer-events-none"
        aria-label="Wróć na górę strony">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
        </svg>
    </a>

    <!-- ═══════════════════════════════════════════
     SCRIPTS
════════════════════════════════════════════ -->
    <script>
        // ── Dynamic year ──
        document.getElementById('footer-year').textContent = new Date().getFullYear();

        // ── Navbar scroll effect ──
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 20) {
                navbar.classList.add('glass', 'border-b', 'border-white/5', 'shadow-2xl');
            } else {
                navbar.classList.remove('glass', 'border-b', 'border-white/5', 'shadow-2xl');
            }
        }, { passive: true });

        // ── Mobile menu ──
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamIcon = document.getElementById('ham-icon');
        const closeIcon = document.getElementById('close-icon');

        hamburger.addEventListener('click', () => {
            const isOpen = mobileMenu.classList.toggle('open');
            hamIcon.classList.toggle('hidden', isOpen);
            closeIcon.classList.toggle('hidden', !isOpen);
            hamburger.setAttribute('aria-expanded', isOpen);
        });

        function closeMobile() {
            mobileMenu.classList.remove('open');
            hamIcon.classList.remove('hidden');
            closeIcon.classList.add('hidden');
            hamburger.setAttribute('aria-expanded', false);
        }

        // Close on outside click
        document.addEventListener('click', (e) => {
            if (!hamburger.contains(e.target) && !mobileMenu.contains(e.target)) {
                closeMobile();
            }
        });

        // ── Scroll Reveal ──
        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

        // ── Active nav link on scroll ──
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('nav a[href^="#"]');

        const sectionObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.id;
                    navLinks.forEach(link => {
                        link.classList.toggle('active', link.getAttribute('href') === '#' + id);
                    });
                }
            });
        }, { threshold: 0.4 });

        sections.forEach(s => sectionObserver.observe(s));

        // ── Back to top button ──
        const btt = document.getElementById('back-to-top');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 400) {
                btt.style.opacity = '1';
                btt.style.pointerEvents = 'auto';
            } else {
                btt.style.opacity = '0';
                btt.style.pointerEvents = 'none';
            }
        }, { passive: true });

        // ── Contact form ──
        document.getElementById('contact-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const success = document.getElementById('form-success');
            const error = document.getElementById('form-error');
            success.classList.add('hidden');
            error.classList.add('hidden');

            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const service = document.getElementById('service').value;
            const consent = this.querySelector('input[type="checkbox"]').checked;

            if (!name || !email || !service || !consent) {
                error.classList.remove('hidden');
                return;
            }

            // Simulate submission
            const btn = this.querySelector('button[type="submit"]');
            btn.textContent = 'Wysyłanie...';
            btn.disabled = true;

            setTimeout(() => {
                success.classList.remove('hidden');
                this.reset();
                btn.innerHTML = 'Wyślij zapytanie <svg class="w-5 h-5 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>';
                btn.disabled = false;
            }, 1200);
        });
    </script>

</body>

</html>
