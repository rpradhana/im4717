/**
 * MENU
 */

var amount1 = $('#amount-1');
var amount2 = $('#amount-2');
var amount3 = $('#amount-3');

var item1 = document.getElementsByName("item-1");
var item2 = document.getElementsByName("item-2");
var item3 = document.getElementsByName("item-3");

var subtotal1;
var subtotal2;
var subtotal3;

function handleInputChange() {
	amount1 = $('#amount-1').value;
	amount2 = $('#amount-2').value;
	amount3 = $('#amount-3').value;

	// item1
	if (item1[0].checked) {
		subtotal1 = item1[0].value * amount1;
		$('#subtotal-1').innerHTML = '$' + subtotal1;
	}
	else if (item1[1].checked) {
		subtotal1 = item1[1].value * amount1;
		$('#subtotal-1').innerHTML = '$' + subtotal1;
	}

	// item2
	if (item2[0].checked) {
		subtotal2 = item2[0].value * amount2;
		$('#subtotal-2').innerHTML = '$' + subtotal2;
	}
	else if (item2[1].checked) {
		subtotal2 = item2[1].value * amount2;
		$('#subtotal-2').innerHTML = '$' + subtotal2;
	}

	// item3
	if (item3[0].checked) {
		subtotal3 = item3[0].value * amount3;
		$('#subtotal-3').innerHTML = '$' + subtotal3;
	}
	else if (item3[1].checked) {
		subtotal3 = item3[1].value * amount3;
		$('#subtotal-3').innerHTML = '$' + subtotal3;
	}
	$('#total').innerHTML = '$' + (subtotal1 + subtotal2 + subtotal3);
}


/**
 * Helper functions
 */

// jquery $()
function $(selector, context) {
	return (context || document).querySelector(selector);
}
function $all(selector, context) {
	return (context || document).querySelectorAll(selector);
}
