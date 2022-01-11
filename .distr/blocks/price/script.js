$(function () {
	// initSimplePay();
	sendForm();

	function initSimplePay() {
		let allBtns = document.querySelectorAll('.btn-script'),
		popup = document.querySelector('#popup-ticket'),
		popupId = popup.querySelector('input[name="product_id"]');
	
		if (!allBtns.length) return;	
		for (let currentTicket of allBtns){
			currentTicket.addEventListener('click',function(){		
				popupId.value = this.getAttribute('data-id')
			})
		}
	};

	function sendForm() {
		let buttons = document.querySelectorAll('.btn-pay');
		if(!buttons){
			return
		}
	
		for ( let button of buttons ) {
	
			button.addEventListener('click', function() {
				let
				is_data = false,
				link = button.getAttribute('href'),
				form = document.querySelector(`${link} form`)
				;
	
				/* Если есть данные в localStorage, заполняем ими поля */
				if ( localStorage.name && localStorage.phone && localStorage.email) {
					form.querySelector('input[name="name"]').value = localStorage.name;
					form.querySelector('input[name="phone"]').value = localStorage.phone;
					form.querySelector('input[name="email"]').value = localStorage.email;
				}
	
				/* Если есть данные в полях, разрешаем отправку */
				if ( 
					form.querySelector('input[name="name"]').value && 
					form.querySelector('input[name="phone"]').value && 
					form.querySelector('input[name="email"]').value) {
					is_data = true;
				}
	
				/* Оправляем, если отправка разрешена */
				if ( is_data ) {
					let event = new CustomEvent("submit", {"bubbles": true, "cancelable": true});
					form.dispatchEvent(event);
				}
	
			})
		}
	
		/* CustomEvent полифил */
		(function () {
			if ( typeof window.CustomEvent === "function" ) return false;
			function CustomEvent ( event, params ) {
				params = params || { bubbles: true, cancelable: true, detail: undefined };
				var evt = document.createEvent('submit');
				evt.initCustomEvent( event, params.bubbles, params.cancelable, params.detail );
				return evt;
			}
			CustomEvent.prototype = window.Event.prototype;
			window.CustomEvent = CustomEvent;
		})();
	
		}
});