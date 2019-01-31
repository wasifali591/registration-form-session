

$(function(){
    $("#username").keypress(function(){  
        validateName() 
    });

});

/* validate the name*/
function validateName(){
	name = document.getElementById('username').value;
	if(name===''){
		document.getElementById("wrongName").innerHTML="Enter your name.";
		nameValidate=0;
		
	}else{
		document.getElementById("wrongName").innerHTML="";
		nameValidate=1;
	}
}

/* validate email address */
function validateEmail(email){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if (reg.test(email.value) == false) 
        {
			document.getElementById("wrongEmail").innerHTML="Invalid Email Address<br>name@mail.com";
			emailValidate=0;
        }else{
			document.getElementById("wrongEmail").innerHTML="";
			emailValidate=1;
		}
}

/*validate password */
function validatePassword(psw){
	var reg = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
	if (reg.test(psw.value) == false) 
        {
            document.getElementById("wrongPassword").innerHTML=
			"Password must contain the following:<br>1.A lower case letter<br>2.A capital letter<br>3.A number<br>4.Minimum 8 characters";
			passwordValidate=0;
        }else{
			document.getElementById("wrongPassword").innerHTML="";
			passwordValidate=1;
		}
}