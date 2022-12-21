const close_btn = document.querySelector(".close_btn");
const chk_id_text = opener.document.querySelector(".chk_id");
const id = opener.document.querySelector(".id_box");

function closeBtn(){
    chk_id_text.innerText = "no";
    id.style.backgroundColor = "rgba(247,161,161,1)";
    window.close();
}

close_btn.addEventListener("click",closeBtn);


