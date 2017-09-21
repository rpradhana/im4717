function validateForm() {
	var jobName = document.getElementById('job-name').value;
	if (jobName.match(/[a-z\ ]/ig)) {
		alert("SUCCESS" + jobName);
		return true;
	} else {
		alert("FAIL" + jobName);
		return false;
	}
}

document.getElementById('job-application').onsubmit = validateForm;
// function init () {
// }

// window.onload = init();