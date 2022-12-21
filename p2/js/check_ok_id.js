const ok_btn = document.querySelector(".ok_btn");
const chk_id_text = opener.document.querySelector(".chk_id");
const id = opener.document.querySelector(".id_box");

function okBtn(){
    chk_id_text.innerText = "OK";
    id.style.backgroundColor = "rgba(152,225,170,1)";
    window.close();
}

ok_btn.addEventListener("click",okBtn);



