const post_btn = document.querySelector(".post_btn");
const post_title = document.querySelector(".content_title");
const post_main = document.querySelector(".content_main");
const form = document.querySelector(".post_form");

function enterPost(){
    const post_title_value = post_title.value;
    const post_main_value = post_main.value;
    if(post_title_value === ""){
        alert("input title");
    }
    else if(post_main_value === ""){
        alert("input content");
    }else{
        form.submit();
    }
}

post_btn.addEventListener("click",enterPost);