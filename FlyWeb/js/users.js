const searchBar=document.querySelector(".searchbar1"),
searchBtn=document.querySelector(".users .search button"),
usersList=document.querySelector(".users .usero");


searchBar.onkeyup = ()=>{
	let searchTerm=searchBar.value;

if (searchTerm!="") {

	searchBar.classList.add("active");
}
else{
		searchBar.classList.remove("active");

}




	let xhr = new XMLHttpRequest();

    xhr.open("POST", "../php/search.php", true);

    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              const data=xhr.response;
            
			usersList.innerHTML=data;
          }
      }
    }
    
    xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xhr.send("searchTerm="+searchTerm);


}

setInterval(()=>{

  let xhr = new XMLHttpRequest();
  
      xhr.open("GET", "../php/for-users.php", true);
  
      xhr.onload = ()=>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                const data=xhr.response;
              if (!searchBar.classList.contains("active")) {
          usersList.innerHTML=data;
        }
  
            }
        }
      }
      
      xhr.send();
  
  
  }, 500);


