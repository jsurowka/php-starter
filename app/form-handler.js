// form-handler.js — obsługa AJAX dla formularza kontaktowego Web-Boost
// Podłącz przed </body> lub jako typ="module"

;(function () {
	'use strict'

	const form = document.getElementById('contact-form')
	const btnSubmit = form?.querySelector('[type="submit"]')
	const msgSuccess = document.getElementById('form-success')
	const msgError = document.getElementById('form-error')

	if (!form) return

	// ── Walidacja inline (przed wysyłką) ──────────────────────────────────────
	function showFieldError(field, message) {
		field.setAttribute('aria-invalid', 'true')
		let hint = document.getElementById(field.id + '-hint')
		if (!hint) {
			hint = document.createElement('span')
			hint.id = field.id + '-hint'
			hint.className = 'block mt-1 text-xs text-red-400'
			hint.setAttribute('role', 'alert')
			field.insertAdjacentElement('afterend', hint)
		}
		hint.textContent = message
		field.setAttribute('aria-describedby', hint.id)
	}

	function clearFieldError(field) {
		field.removeAttribute('aria-invalid')
		const hint = document.getElementById(field.id + '-hint')
		if (hint) hint.remove()
		field.removeAttribute('aria-describedby')
	}

	function validateForm() {
		let valid = true
		const fields = form.querySelectorAll('[required]')

		fields.forEach(field => {
			clearFieldError(field)

			if (!field.value.trim()) {
				showFieldError(field, 'To pole jest wymagane.')
				valid = false
				return
			}

			if (field.type === 'email' && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(field.value)) {
				showFieldError(field, 'Podaj prawidłowy adres e-mail.')
				valid = false
			}

			if (field.type === 'checkbox' && !field.checked) {
				showFieldError(field, 'Zgoda jest wymagana.')
				valid = false
			}
		})

		return valid
	}

	// ── Stan przycisku ────────────────────────────────────────────────────────
	function setLoading(loading) {
		btnSubmit.disabled = loading
		btnSubmit.innerHTML = loading
			? `<svg class="w-5 h-5 animate-spin" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true">
           <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
         </svg> Wysyłanie…`
			: `Wyślij zapytanie
         <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
           <path d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
         </svg>`
	}

	// ── Obsługa submit ────────────────────────────────────────────────────────
	form.addEventListener('submit', async function (e) {
		e.preventDefault()

		// Schowaj poprzednie komunikaty
		msgSuccess.classList.add('hidden')
		msgError.classList.add('hidden')

		if (!validateForm()) {
			msgError.textContent = 'Proszę poprawić błędy w formularzu.'
			msgError.classList.remove('hidden')
			// Scrolluj do pierwszego błędu
			form.querySelector('[aria-invalid="true"]')?.focus()
			return
		}

		setLoading(true)

		const payload = new FormData(form)
		// Dodaj checkbox consent ręcznie (FormData pomija unchecked)
		const checkbox = form.querySelector('input[type="checkbox"]')
		if (checkbox?.checked) {
			payload.append('consent', '1')
		}

		try {
			const response = await fetch('contact.php', {
				method: 'POST',
				body: payload,
				headers: { 'X-Requested-With': 'XMLHttpRequest' },
			})

			const data = await response.json()

			if (data.success) {
				msgSuccess.textContent = '✓ ' + data.message
				msgSuccess.classList.remove('hidden')
				form.reset()
				// Wyczyść błędy po resecie
				form.querySelectorAll('[aria-invalid]').forEach(clearFieldError)
				// Scroll do wiadomości sukcesu
				msgSuccess.scrollIntoView({ behavior: 'smooth', block: 'nearest' })
			} else {
				msgError.textContent = data.message || 'Wystąpił błąd. Spróbuj ponownie.'
				msgError.classList.remove('hidden')
			}
		} catch (err) {
			msgError.textContent = 'Błąd połączenia. Sprawdź internet i spróbuj ponownie.'
			msgError.classList.remove('hidden')
			console.error('[Web-Boost form]', err)
		} finally {
			setLoading(false)
		}
	})

	// ── Czyść błędy inline przy edycji pola ──────────────────────────────────
	form.querySelectorAll('input, select, textarea').forEach(field => {
		field.addEventListener('input', () => clearFieldError(field))
		field.addEventListener('change', () => clearFieldError(field))
	})
})()
