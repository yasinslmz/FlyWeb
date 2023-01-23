const button=document.querySelector(".button"),
form=document.querySelector(".leftcontent form"),
errorText=document.querySelector(".error");


form.onsubmit=(e)=>{
	e.preventDefault();
}

button.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "../php/signup.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              
            const data=xhr.response;
            if (data=="success") {
              
               window.location="http://localhost/FlyWeb/html/users.php";

            }else{
              console.log(data);
              errorText.textContent=data;
              errorText.style.display="block";
            }

          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
