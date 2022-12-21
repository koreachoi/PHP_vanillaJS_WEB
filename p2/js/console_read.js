const current_num = document.querySelector(".current_num");
const total_num = document.querySelector(".total_num");
const previous = document.querySelector(".back_previous");
const next = document.querySelector(".back_next");

function backPrevious(){ // link to previous post page 
    if(current_num.value === total_num.value){ // if current page is first page
        alert("First Post"); // call alert 
    }else{
        const add_num = parseInt(current_num.value) + 1; // if current page is not first page
        const url = "console_read.php?cid=" + add_num; // create url
        location.replace(url); // link to url
    }
}

function backNext(){ // same to backPrevious function
    if(current_num.value <= 1){
        alert("Last Post");
    }else{
        const sub_num = parseInt(current_num.value) - 1;
        const url = "console_read.php?cid=" + sub_num;
        location.replace(url);
    }
}

previous.addEventListener("click",backPrevious);
next.addEventListener("click",backNext);
/* ----------------------------------------------------------------------*/
const delete_comment_btn = document.querySelectorAll(".comment_delete");

const total_comment = document.querySelector(".total_comment");
const total_comment_count = parseInt(total_comment.value);

function deleteComment(e){
    const dcid = e.target.id;
    location.replace("delete_comment.php?dcid=" + dcid);
}
for(i = 0; i < total_comment_count; i++){
    delete_comment_btn[i].addEventListener("click",deleteComment);
}
/* ----------------------------------------------------------------------*/
const c_main = document.querySelector(".content_main");
c_main.innerText.replaceAll(/(\n|\r\n)/g, "<br>");
/* ----------------------------------------------------------------------*/
const edit_post = document.querySelector(".edit_post");
const delete_post = document.querySelector(".delete_post");
const SESSION_ID = document.querySelector(".SESSION_ID");
const POST_ID = document.querySelector(".POST_ID");

if(POST_ID.value === SESSION_ID.value){
    edit_post.style.display ="block";
    delete_post.style.display ="block";
}else{
    edit_post.style.display ="none";
    delete_post.style.display ="none";
}

