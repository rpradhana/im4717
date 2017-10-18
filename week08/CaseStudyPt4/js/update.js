function toggleInput(row) {
	// var prices      = $all('.products .product-'+ row + ' .price');
	// for (ii = 0; ii < prices.length; ii++) {
	// 	prices[ii].disabled = !prices[ii].disabled;
	// }
	var prices      = $all('.products .product-'+ row + ' .price');
	var pricesInput = $all('.products .product-'+ row + ' .price-input');
		for (ii = 0; ii < prices.length; ii++) {
			if (prices[ii].style.display == 'none') {
				prices[ii].style.display == 'inline';
				pricesInput[ii].style.display == 'none';
				// Reset pricesInput
				pricesInput[ii].value = prices[ii].innerHTML;
			} else {
				prices[ii].style.display == 'none';
				pricesInput[ii].style.display == 'inline';
			}
			prices[ii].style.display = prices[ii].style.display == 'none' ? 'inline' : 'none';
			pricesInput[ii].style.display = pricesInput[ii].style.display == 'inline' ? 'none' : 'inline';
			removeClass(pricesInput[ii], 'invalid');
		}

	var checkboxes = $all('input[type=checkbox]');
	$('#product-update button').style.display = 'none';
	for (ii = 0; ii < checkboxes.length; ii++) {
		if (checkboxes[ii].checked) {
			$('#product-update button').style.display = 'block';
			return;
		}
	}
}

function handleInputChange() {
	var isValid = true;
	pricesInput = $all('.price-input');
	for (ii = 0; ii < pricesInput.length; ii++) {
		if (!validateInput(pricesInput[ii].value)) {
			addClass(pricesInput[ii], 'invalid');
			isValid = false;
		}
		else {
			removeClass(pricesInput[ii], 'invalid');
		}
	}
	return isValid;
}

function handleSubmit() {
	if (handleInputChange()) {
		return true;
	}
	else {
		alert('Please enter valid price!');
		return false;
	}

}

// input must be a number
function validateInput(item) {
	return !(isNaN(item) || (item < 0));
}

window.onload = function (e) {

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
