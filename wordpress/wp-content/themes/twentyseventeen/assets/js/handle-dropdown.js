document.addEventListener('DOMContentLoaded', function () {
	var input = document.getElementById('dropdown');
	if (localStorage['job']) { // if job is set
		input.value = localStorage['dropdown']; // set the value
	}
	input.onchange = function () {
		localStorage['dropdown'] = this.value; // change localStorage on change
	}
});