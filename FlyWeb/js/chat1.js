const form=document.querySelector(".typing-area"),
sendBtn=document.querySelector(".typing-area .buto"),
inputField=document.querySelector(".typing-area .inpu"),
chatBox=document.querySelector(".chat-box");

form.onsubmit=(e)=>{

	e.preventDefault();
}

let incoming_id = document.querySelector(".incoming_id").value;

sendBtn.onclick =()=>{

let xhr = new XMLHttpRequest();

    xhr.open("POST", "../php/insert-chat.php", true);

    xhr.onload =()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              
       		inputField.value="";
              scrollToBottom();

          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);

}
chatBox.onmouseenter = ()=>{
    chatBox.classList.add("active");
}

chatBox.onmouseleave = ()=>{
    chatBox.classList.remove("active");
}

setInterval(()=>{

	let xhr = new XMLHttpRequest();


    xhr.open("POST", "../php/get-chat.php", true);

    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data=xhr.responseText;
              
           		chatBox.innerHTML=data;
                   
              if(!chatBox.classList.contains("active")){
                scrollToBottom();
              }

          }
      }
    }
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("incoming_id="+incoming_id);


}, 500);

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
  }

