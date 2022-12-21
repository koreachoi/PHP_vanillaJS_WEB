const s_user_id = document.querySelector(".id_value");

const user_id = document.querySelector(".user_id");
const post_btn = document.querySelector(".comment_input_btn");
const post_textarea = document.querySelector(".input_comment");
const need_login = document.querySelector(".login_comment");


if(s_user_id.value === "none"){ // if this page not have SESSION ID
    user_id.style.display = "none"; // comment box's display is none
    post_btn.style.display = "none";
    post_textarea.style.display = "none";
    need_login.style.display = "block";
}else{ // if this page have SESSION 
    user_id.style.display = "block"; // comment box's display is block
    post_btn.style.display = "block";
    post_textarea.style.display = "block";
    need_login.style.display = "none";
}
/* ----------------------------------------------------------------------*/

const enter_btn = document.querySelector(".comment_input_btn");
const comment_main = document.querySelector(".input_comment");

function inputComment(){ // add comment box not have any value 
    if(comment_main.value === ""){
        alert("input comment"); // call alert
    }else{ // add comment box have any value 
        const comment_form = document.querySelector(".comment_input");
        comment_form.submit(); // submit this value
    }
}
enter_btn.addEventListener("click", inputComment);
/* ----------------------------------------------------------------------*/
$(document).keypress(function(e) {
    if (e.keyCode == 13){
        e.preventDefault();
        const textarea = document.querySelector(".input_comment");
        textarea.value = textarea.value + "\n";
        /*
        let str = textarea.value;
        str.replace('\n', '<br/>');
        textarea.value = str;
        */
    }
});
