const id_value = document.querySelector(".id_value");
const new_post_button = document.querySelector(".new_post_btn");


function createNewPost(){ // create btn function 
    if(id_value.value === "none"){ // if id is "none", call alert
        location.replace("../php/console.php");
        alert("New Post Need Login");
    }else{ // if id is not "none", link to Post 
        location.replace("../php/console_post.php");
    }
}

new_post_button.addEventListener("click",createNewPost);
/* ----------------------------------------------------------------------*/
const title = document.querySelectorAll(".ctitle");

for(i = 0; i<title.length; i++){
    if(title[i].innerText.length >=30){
        title[i].innerText = title[i].innerText.substr(0,30)+ "...";
    }
}
/* ----------------------------------------------------------------------*/
const s_form = document.querySelector(".search_form");
const s_case = document.querySelector(".search_case");
const s_name = document.querySelector(".search_name");
const s_btn = document.querySelector(".search_btn");

function searchCase(){
    if(s_name.value == ""){
        alert("input any text");
    }else{
        s_form.submit();
    }
}
s_btn.addEventListener("click",searchCase);