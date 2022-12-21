$(function(){
    $('.pw_eyes').on('click',function(){
        $('.pw_box').toggleClass('active');
        if($('.pw_box').hasClass('active')){
            $("#pw_eyes").attr('class',"fa-solid fa-eye");
            $(".pw_box").attr('type',"text");
        }else{
            $("#pw_eyes").attr('class',"fa-solid fa-eye-slash");
            $(".pw_box").attr('type',"password");
        }
    });
});

const form = document.querySelector(".signup_box");

const id_chk_btn = document.querySelector(".id_chk_btn"); // check id btn
const na_chk_btn = document.querySelector(".na_chk_btn"); // check name btn
const pw_chk_btn = document.querySelector(".pw_chk_btn"); // check password btn
const signup_btn = document.querySelector(".signup_button"); // sign up btn

const id = document.querySelector(".id_box"); // id box
const na = document.querySelector(".name_box"); // name box
const pw = document.querySelector(".pw_box"); // pw box
const chk_pw = document.querySelector(".pw_chk_box"); // pw check box

const chk_id_text = document.querySelector(".chk_id"); // id check text 
const chk_na_text = document.querySelector(".chk_na"); // id check text 
const chk_pw_text = document.querySelector(".chk_pw"); // pw check text

function checkId(){ // function checking id
    const RegExpId = /^[a-zA-Z0-9]*$/;
    const cid = id.value;
    if(cid.length < 6){
        alert("ID's length is less than 6");
        id.style.backgroundColor = "rgba(247,161,161,1)";
        chk_id_text.innerText = "no";
    }else if(!RegExpId.test(cid)){
        alert("ID only Number or Eng");
        id.style.backgroundColor = "rgba(247,161,161,1)";
        chk_id_text.innerText = "no";
    }else{
        url = "check_id.php?userid="+cid;
        window.open(url,"chkid", "width=400px, height=200px");
    }
}
function checkName(){ // function checking name
    if(na.value.length >= 6){
        na.style.backgroundColor = "rgba(152,225,170,1)";
        chk_na_text.innerText = "OK";
    }else{
        na.style.backgroundColor = "rgba(247,161,161,1)";
        chk_na_text.innerText = "no";
        alert("Name's length is less than 6");
    }
}
function checkPassword(){ // function checking password 
    const RegExpPw = /^[a-zA-Z0-9]*$/;
    if(pw.value.length >= 6){
        if(!RegExpPw.test(pw.value)){
            alert("Password only Number or Eng");
            pw.style.backgroundColor = "rgba(247,161,161,1)";
            chk_pw.style.backgroundColor = "rgba(247,161,161,1)";
            chk_pw_text.innerText = "no";
        }else{
            if(pw.value === chk_pw.value){
                pw.style.backgroundColor = "rgba(152,225,170,1)";
                chk_pw.style.backgroundColor = "rgba(152,225,170,1)";
                chk_pw_text.innerText = "OK";
            }else if(pw.value !== chk_pw.value){
                pw.style.backgroundColor = "rgba(247,161,161,1)";
                chk_pw.style.backgroundColor = "rgba(247,161,161,1)";
                chk_pw_text.innerText = "no";
            }
        }
    }else{
        pw.style.backgroundColor = "rgba(247,161,161,1)";
        chk_pw.style.backgroundColor = "rgba(247,161,161,1)";
        chk_pw_text.innerText = "no";
        alert("Password's length is less than 6");
    }
}

function checkAll(){ // function checking all
    if(chk_id_text.innerText === "no"){
        alert("Check Your ID");
        return false;
    }else if(chk_na_text.innerText === "no"){
        alert("Check Your Name");
        return false;
    }else if(chk_pw_text.innerText === "no"){
        alert("Check Your Password");
        return false;
    }else if(
    (chk_id_text.innerText === "OK") && 
    (chk_na_text.innerText === "OK") && 
    (chk_pw_text.innerText === "OK")){
        form.submit();
    }
}

id_chk_btn.addEventListener("click",checkId);
na_chk_btn.addEventListener("click",checkName);
pw_chk_btn.addEventListener("click",checkPassword);
signup_btn.addEventListener("click",checkAll);




