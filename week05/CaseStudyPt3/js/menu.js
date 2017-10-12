function handleInputChange() {
	var items = $all('[id^=amount]');
	var quantity = new Array();
	var subtotal = new Array();
	var total = 0;

	// iterate through all items
	for (ii = 0; ii < items.length; ii++) {

		// get quantity of each item
		quantity[ii] = items[ii].value;

		if (validateInput(quantity[ii])) {
			removeClass(items[ii], 'invalid');
			subtotal[ii] = getSubtotal(ii, quantity[ii]);
			total += subtotal[ii];
		} else {
			alert('Please enter a valid quantity!');
			addClass(items[ii], 'invalid');
			subtotal[ii] = 0;
			total += subtotal[ii];
		}

		$('#subtotal-' + ii).innerHTML = '$' + subtotal[ii];
		$('#total').innerHTML = '$' + total;
	}
}

// input must be a number
function validateInput(item) {
	return !(isNaN(item) || (item < 0));
}

// calculate the subtotal of each item
function getSubtotal(itemIndex, quantity) {
	var option = $all('input[name=item-' + itemIndex + ']');

	// check which option is checked
	// then multiply quantity by the value of corresponding option
	var isFirstOption = option[0].checked ? true : false;
	return isFirstOption ? quantity * option[0].value : quantity * option[1].value;
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

function addClass(element, className) {
	element.classList.add(className);
}

function removeClass(element, className) {
	element.classList.remove(className);
}
