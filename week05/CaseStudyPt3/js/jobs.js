function validateAll() {
	var valid;
	valid = validateName();
	valid = validateEmail();
	valid = validateDate();
	valid = validateExperience();
	if (!valid) {
		return false;
	}
	else {
		return true;
	}
}

function validateName() {
	if ($('#job-name').value.length <= 0){
		alert('Name cannot be empty');
		styleInvalid($('#job-name'));
		return false;
	}
	else if (!regex($('#job-name'), (/[A-Z]/ig))) {
		alert('Name can only contain alphabets');
		styleInvalid($('#job-name'));
		return false;
	} else {
		styleValid($('#job-name'));
		return true;
	}
}
function validateEmail() {
	if ($('#job-email').value.length <= 0){
		alert('Email cannot be empty');
		styleInvalid($('#job-email'));
		return false;
	}
	else if (!regex($('#job-email'), (/^[\w.-]+@[\w.]+\.[A-Z]{2,3}$/ig))) {
		alert('Invalid email address');
		styleInvalid($('#job-email'));
		return false;
	} else {
		styleValid($('#job-email'));
		return true;
	}
}
function validateDate() {
	var
		today       = new Date(Date.now()),
		selectedDay = new Date($('#job-date').value);

	if (selectedDay < today){
		alert('Date cannot be in the past');
		$('#job-date').value = null;
		// styleInvalid($('#job-date'));
		return false;
	} else {
		// styleValid($('#job-date'));
		return true;
	}
};
function validateExperience() {
	if ($('#job-experience').value.length <= 0){
		alert('Experience cannot be empty');
		styleInvalid($('#job-experience'));
		return false;
	} else {
		styleValid($('#job-experience'));
		return true;
	}
}

function styleInvalid(element) {
	element.classList.add('invalid');
}
function styleValid(element) {
	element.classList.remove('invalid');
}
function regex(element, validator) {
	return element.value.match(validator);
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