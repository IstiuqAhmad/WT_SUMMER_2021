function isValid(){

	var userName1 = document.forms["loginForm"]["userName1"].value;
	var password1 = document.forms["loginForm"]["password1"].value;

	var flag = true;

///////////////*****USERNAME*****

	if (userName1 == "") {
		document.getElementById('userNameErr1').innerHTML = 'Invalid Username';
		flag = false;
	}
	else{
		document.getElementById('userNameErr1').innerHTML = '';

	}


///////////////*****PASSWORD*****

	if (password1 == "") {
		document.getElementById('passwordErr1').innerHTML = 'Enter valid password';
		flag = false;

	}
	else{
		document.getElementById('passwordErr1').innerHTML = '';

	}

	return flag;
}