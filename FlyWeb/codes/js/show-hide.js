const password=document.querySelector(".form-group input[type='password']"),
toggleBtn=document.querySelector(".form-group .eyes");

toggleBtn.onclick=()=>{
	if(password.type=="password"){
		password.type="text";
	}
	else{
		password.type="password";
	}
}