function validateAll() {
	var valid;
	valid = validateName();
	valid = validateEmail();
	valid = validateDate();
	valid = validateExperience();
	if (!valid) {
		return false;
	} else {
		return true;
	}
}

function validateName() {
	if ($('#job-name').value.length <= 0) {
		alert('Name cannot be empty');
		addClass($('#job-name'), 'invalid');
		return false;
	} else if (!regex($('#job-name'), /^[\sA-Z]+(\s+[A-Z]+)*$/i)) {
		alert('Name can only contain alphabets');
		addClass($('#job-name'), 'invalid');
		return false;
	} else {
		removeClass($('#job-name'), 'invalid');
		return true;
	}
}

function validateEmail() {
	if ($('#job-email').value.length <= 0) {
		alert('Email cannot be empty');
		addClass($('#job-email'), 'invalid');
		return false;
	} else if (!regex($('#job-email'), /^[\w.-]+@([\w.]+\.){1,3}[\w.]{2,3}$/i)) {
		alert('Invalid email address');
		addClass($('#job-email'), 'invalid');
		return false;
	} else {
		removeClass($('#job-email'), 'invalid');
		return true;
	}
}

function validateDate() {
	var
		today       = new Date(Date.now()),
		selectedDay = new Date($('#job-date').value);

	if (selectedDay < today) {
		alert('Date cannot be in the past/today');
		$('#job-date').value = null;
		// addClass($('#job-date'), 'invalid');
		return false;
	} else {
		// removeClass($('#job-date'), 'invalid');
		return true;
	}
};

function validateExperience() {
	if ($('#job-experience').value.length <= 0) {
		alert('Experience cannot be empty');
		addClass($('#job-experience'), 'invalid');
		return false;
	} else {
		removeClass($('#job-experience'), 'invalid');
		return true;
	}
}

/**
 * Helper functions
 */

// jquery $()
function $(selector, context) {
	if (Array.isArray(selector)) {
		return (context || document).querySelectorAll(selector);
	} else {
		return (context || document).querySelector(selector);
	}
}

function addClass(element, className) {
	element.classList.add(className);
}

function removeClass(element, className) {
	element.classList.remove(className);
}

function regex(element, validator) {
	// return element.value.match(validator);
	return validator.test(element.value);
}