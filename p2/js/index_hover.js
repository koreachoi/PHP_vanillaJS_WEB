//---------------------------------------------------------------------/
// <Console, Online, Mobile> Mouse Hover Event //
// get parameter 
const mobile_hover = document.querySelector('.third_child');
const online_hover = document.querySelector('.second_child');
const console_hover = document.querySelector('.first_child');

// mobile hover event 
function mobileHoverIn(){
    const opener = document.querySelector('.third_child_open');
    opener.style.display = "none";
    setTimeout(function(){
        const content = document.querySelector('.third_child_content');
        content.style.display ="block";
    }, 500);

}
function mobileHoverOut(){
    const opener = document.querySelector('.third_child_open');
    opener.style.display = "block";
    const content = document.querySelector('.third_child_content');
    content.style.display ="none";
}

// online hover event 
function onlineHoverIn(){
    const opener = document.querySelector('.second_child_open');
    opener.style.display = "none";
    setTimeout(function(){
        const content = document.querySelector('.second_child_content');
        content.style.display ="block";
    },500);

}
function onlineHoverOut(){
    const opener = document.querySelector('.second_child_open');
    opener.style.display = "block";
    const content = document.querySelector('.second_child_content');
    content.style.display ="none";
}

// console hover event 
function consoleHoverIn(){
    const opener = document.querySelector('.first_child_open');
    opener.style.display = "none";
    setTimeout(function(){
        const content = document.querySelector('.first_child_content');
        content.style.display ="block";
    },500);
}
function consoleHoverOut(){
    const opener = document.querySelector('.first_child_open');
    opener.style.display = "block";
    const content = document.querySelector('.first_child_content');
    content.style.display ="none";
}

// function create
mobile_hover.addEventListener("mouseleave",mobileHoverOut);
mobile_hover.addEventListener("mouseenter",mobileHoverIn);

online_hover.addEventListener("mouseleave",onlineHoverOut);
online_hover.addEventListener("mouseenter",onlineHoverIn);

console_hover.addEventListener("mouseleave",consoleHoverOut);
console_hover.addEventListener("mouseenter",consoleHoverIn);
