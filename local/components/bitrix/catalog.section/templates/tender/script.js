document.addEventListener("click", function (e) {
	if (e.target.dataset.btn){
		let btn = e.target;
		var ajax = $.ajax({
			type: 'POST',
			url: location.pathname + '?action=ADD2BASKET&id='+ btn.id,
			data: {
				ajax_basket: 'Y',
				quantity: '1'
			}
		});

		ajax.done(function(data) {
			if (data.STATUS == 'OK') {
				/*alert("Товар успешно добавлен!");*/
				location="/personal/cart/"
			}
		});
	}
});
