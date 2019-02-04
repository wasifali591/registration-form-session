/**
* File Name  : validation-form
* Description : js for validate form 
* Created date : 1/02/2019
* Author  : Md Wasif Ali
* Comments : 
*/
$(function () {
	$('#username').on('keypress blur keyup keydown change', function (e) {
		validateName();
	});

	$('#email').on('keypress blur keyup keydown change', function (e) {
		validateEmail();
	});

	$('#password').on('keypress blur keyup keydown change', function (e) {
		validatePassword();
	});
	$('#confirmPassword').on('keypress blur keyup keydown change', function (e) {
		checkPassword();
	});

	$('#password').tooltip({
		trigger: 'manual',
	});
	$('#infoIcon').click(function(){
		$('#password').tooltip('toggle');
	});

});

/**  
* function-name:validateName
* description: validate the name
* comments:
*/
function validateName() {
	name = document.getElementById('username').value;
	if (name === '') {
		document.getElementById("wrongName").innerHTML = "Enter your name.";
		nameValidate = 0;

	} else {
		document.getElementById("wrongName").innerHTML = "";
		nameValidate = 1;
	}
}

/**  
* function-name:validateEmail
* description: validate email address
* comments:
*/
function validateEmail() {
	email = document.getElementById('email').value;
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	if (reg.test(email) == false) {
		document.getElementById("wrongEmail").innerHTML = "Enter a valid Email Address.";
		emailValidate = 0;
	} else {
		document.getElementById("wrongEmail").innerHTML = "";
		emailValidate = 1;
	}
}

/**  
* function-name:validatePassword
* description: validate password
* comments:
*/
function validatePassword() {
	psw = document.getElementById('password').value;
	var reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
	if (reg.test(psw) == false) {
		document.getElementById("wrongPassword").innerHTML ="Enter a valid password.";
		passwordValidate = 0;
	} else {
		document.getElementById("wrongPassword").innerHTML = "";
		passwordValidate = 1;
	}
}

/**  
* function-name:confirmPassword
* description: check password and confirm password are same
* comments:
*/
function checkPassword() {
	password = document.getElementById('password').value;
	confirmPassword = document.getElementById('confirmPassword').value;
	if (confirmPassword === password) {
		document.getElementById("wrongConPassword").innerHTML = "";
		nameValidate = 1;
	} else {
		document.getElementById("wrongConPassword").innerHTML = "Password didn't match.";
		nameValidate = 0;

	}
}