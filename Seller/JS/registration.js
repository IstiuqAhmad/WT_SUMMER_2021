function isValid(){

	var firstName = document.forms["registrationForm"]["firstName"].value;
	var lastName = document.forms["registrationForm"]["lastName"].value;
	var dob = document.forms["registrationForm"]["dob"].value;
	var gender = document.forms["registrationForm"]["gender"].value;
	var company = document.forms["registrationForm"]["company"].value;
	var address = document.forms["registrationForm"]["address"].value;
	var phone = document.forms["registrationForm"]["phone"].value;
	var email = document.forms["registrationForm"]["email"].value;
	var userName = document.forms["registrationForm"]["userName"].value;
	var password = document.forms["registrationForm"]["password"].value;

	var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);

	var flag = true;


	if (firstName == "") {
		document.getElementById('firstNameErr').innerHTML = '*Enter your first name';
		flag = false;
	}
	else{

		document.getElementById('firstNameErr').innerHTML = '';
	}


	if (lastName == "") {
		document.getElementById('lastNameErr').innerHTML = '*Enter your last name';
		flag = false;
	}
	else{

		document.getElementById('lastNameErr').innerHTML = '';
	}


	if (dob == "") {
		document.getElementById('dobErr').innerHTML = '*Date of birth required';
		flag = false;
	}
	else{

		document.getElementById('dobErr').innerHTML = '';
	}



	if (gender == "") {
		document.getElementById('genderErr').innerHTML = '*Select your gender';
		flag = false;
	}
	else{

		document.getElementById('genderErr').innerHTML = '';
	}



	if (company == "") {
		document.getElementById('companyErr').innerHTML = '*Select company name';
		flag = false;
	}
	else{

		document.getElementById('companyErr').innerHTML = '';
	}
	

	if (address == "") {
		document.getElementById('addErr').innerHTML = '*Enter your address';
		flag = false;
	}
	else{

		document.getElementById('addErr').innerHTML = '';
	}



	if (!res) {
		document.getElementById('emailErr').innerHTML = '*Email format is not correct';
		flag = false;
	}
	else{

		document.getElementById('emailErr').innerHTML = '';
	}


    if (phone == "") {
	document.getElementById('phoneErr').innerHTML = '*Enter phone number';
	flag = false;
    }
    else{

	document.getElementById('phoneErr').innerHTML = '';
    }



	if (userName == "") {
		document.getElementById('userNameErr').innerHTML = '*Username required';
		flag = false;
	}
	else{

		if (userName.length < 3) {
			document.getElementById('userNameErr').innerHTML = 'username minimum 3 characters';
			flag = false;
		}
		else if (userName.length > 8){
			document.getElementById('userNameErr').innerHTML = 'username maximum 8 characters';
			flag = false;
		}
		else{
			document.getElementById('userNameErr').innerHTML = '';
		}

	}



	if (password == "") {
		document.getElementById('passwordErr').innerHTML = '*Passwoed required';
		flag = false;

	}
	else{

		if (password.length < 4) {
			document.getElementById('passwordErr').innerHTML = 'password minimum 5 characters';
			flag = false;
		}
		else if (password.length > 8){
			document.getElementById('passwordErr').innerHTML = 'password maximum 8 characters';
			flag = false;
		}
		else{
			document.getElementById('passwordErr').innerHTML = '';
		}

	}

	return flag;
}


