//---------------------------------------------------------------------/
// <Best or New> Mouse click animate Event //
$(function(){ // create event
    $('.new_button').click(function(){ // NEW button click event 
        if($('.new_button').height() === 300){ // increase event
            $('.new_button').animate({height : 600}, 500, 'swing', // animate 
            function(){
                const newG = document.querySelectorAll(".new_games"); // getparameter
                const bestG = document.querySelectorAll(".best_games"); // getparameter
                for(i = 0; i < newG.length; i++){ // selectorAll component event 
                    newG[i].style.display = "block"; // display in
                    bestG[i].style.display = "none"; // display out 
                } 
            });
            const img_1 = document.querySelector(".img1"); // get change image parameter
            const img_2 = document.querySelector(".img2"); // get change image parameter
            document.querySelector('.new_button').style.zIndex = 1000; // change index
            setTimeout(function(){ // delay 
                img_1.src ="../img/n1.jpeg"; // change image
                img_2.src ="../img/n4.jpeg"; // change image
            },500);

        }else if($('.new_button').height() >= 600){ // decrease event
            $('.new_button').animate({height : 300}, 500, 'swing'); // animate 
            document.querySelector('.new_button').style.zIndex = 1000; // change index

        }
    });
    $('.best_button').click(function(){ // BEST button click event
        if($('.best_button').height() === 300){ // increase event
            $('.best_button').animate({height : 600}, 500, 'swing', // animate 
            function(){
                const newG = document.querySelectorAll(".new_games"); // getparameter
                const bestG = document.querySelectorAll(".best_games"); // getparameter
                for(i = 0; i < newG.length; i++){ // selectorAll component event 
                    bestG[i].style.display = "block"; // display in
                    newG[i].style.display = "none"; // display out 
                } 
            });
            const img_1 = document.querySelector(".img1"); // get change image parameter
            const img_2 = document.querySelector(".img2"); // get change image parameter
            document.querySelector('.best_button').style.zIndex = 1000; // change index
            setTimeout(function(){ // delay 
                img_1.src ="../img/b1.png"; // change image
                img_2.src ="../img/b4.jpeg"; // change image
            },500);

        }else if($('.best_button').height() >= 600){ // decrease event
            $('.best_button').animate({height : 300}, 500, 'swing', // animate 
            function(){ // callback function : execute  after first event
                document.querySelector('.best_button').style.zIndex = 0000}); // change index 
        }
    });
});

//---------------------------------------------------------------------/
// <Best or New content> Mouse hover Event //
// if execute event, change gamename on tag bar, input image
const bgames = document.querySelectorAll(".best_games"); // get click target parameter
const ngames = document.querySelectorAll(".new_games"); // get click target parameter
// BEST or NEW games list
const bgames_list = ["V RISING", "READY or NOT","GTA5", "FIFA22", "CIVILIZATION VI", "ELDEN RING"];
const ngames_list = ["STRAY", "THE DAY BEFORE", "Hollow Knight : Silksong", "STALKER2", "FROST FUNK2", "Party Animals"];

function clickBgames(e){ // Click event 
    const target = e.target.id; // get present event target 
    const tag = document.querySelector(".new_best_photo_tag_1"); // get tag bar_1 parameter
    const title = document.querySelector("#new_best_game_name_1"); // get game title_1 parameter
    const tag2 = document.querySelector(".new_best_photo_tag_2"); // get tag bar_2 parameter
    const title2 = document.querySelector("#new_best_game_name_2"); // get game title_2 parameter
    if(target === "bg1"){ // if getting present target id is "bg1"
        if(title.innerText === ""){ // if title's content is " "
            tag.style.height = '30px'; // change tag bar height 
            tag.style.transition = '0.5s'; // change transition 
            tag.style.opacity = '0.3'; // change opacity 
            setTimeout(function(){ // delay 
                title.innerText = bgames_list[0]; // change title
            }, 250);
            const img_1 = document.querySelector(".img1"); // get change image parameter
            img_1.src ="../img/b1.png"; // change image 
        }else if(title.innerText !== ""){ // if title's content isn't " "
            tag.style.height = '0px'; // change tag bar height 
            tag.style.transition = '0.25s'; // change transition
            tag.style.opacity = '1'; // change opacity
            title.innerText = ""; // change title to " "
        }
    }
    if(target === "bg2"){ // if getting present target id is "bg2"
        if(title.innerText === ""){ 
            tag.style.height = '30px';
            tag.style.transition = '0.5s';
            tag.style.opacity = '0.3';
            setTimeout(function(){
                title.innerText = bgames_list[1];
            }, 250);
            const img_1 = document.querySelector(".img1");
            img_1.src ="../img/b2.jpg";
        }else if(title.innerText !== ""){
            tag.style.height = '0px';
            tag.style.transition = '0.25s';
            tag.style.opacity = '1';
            title.innerText = "";
        }
    }
    if(target === "bg3"){ // if getting present target id is "bg3"
        if(title.innerText === ""){
            tag.style.height = '30px';
            tag.style.transition = '0.5s';
            tag.style.opacity = '0.3';
            setTimeout(function(){
                title.innerText = bgames_list[2];
            }, 250);
            const img_1 = document.querySelector(".img1");
            img_1.src ="../img/b3.jpeg";
        }else if(title.innerText !== ""){
            tag.style.height = '0px';
            tag.style.transition = '0.25s';
            tag.style.opacity = '1';
            title.innerText = "";
        }
    }
    if(target === "bg4"){ // if getting present target id is "bg4"
        if(title2.innerText === ""){
            tag2.style.height = '30px';
            tag2.style.transition = '0.5s';
            tag2.style.opacity = '0.3';
            setTimeout(function(){
                title2.innerText = bgames_list[3];
            }, 250);
            const img_2 = document.querySelector(".img2");
            img_2.src ="../img/b4.jpeg";
        }else if(title2.innerText !== ""){
            tag2.style.height = '0px';
            tag2.style.transition = '0.25s';
            tag2.style.opacity = '1';
            title2.innerText = "";
        }
    }
    if(target === "bg5"){ // if getting present target id is "bg5"
        if(title2.innerText === ""){
            tag2.style.height = '30px';
            tag2.style.transition = '0.5s';
            tag2.style.opacity = '0.3';
            setTimeout(function(){
                title2.innerText = bgames_list[4];
            }, 250);
            const img_2 = document.querySelector(".img2");
            img_2.src ="../img/b5.jpeg";
        }else if(title2.innerText !== ""){
            tag2.style.height = '0px';
            tag2.style.transition = '0.25s';
            tag2.style.opacity = '1';
            title2.innerText = "";
        }
    }
    if(target === "bg6"){ // if getting present target id is "bg6"
        if(title2.innerText === ""){
            tag2.style.height = '30px';
            tag2.style.transition = '0.5s';
            tag2.style.opacity = '0.3';
            setTimeout(function(){
                title2.innerText = bgames_list[5];
            }, 250);
            const img_2 = document.querySelector(".img2");
            img_2.src ="../img/b6.jpeg";
        }else if(title2.innerText !== ""){
            tag2.style.height = '0px';
            tag2.style.transition = '0.25s';
            tag2.style.opacity = '1';
            title2.innerText = "";
        }
    }

    if(target === "ng1"){ // if getting present target id is "ng1"
        if(title.innerText === ""){
            tag.style.height = '30px';
            tag.style.transition = '0.5s';
            tag.style.opacity = '0.3';
            setTimeout(function(){
                title.innerText = ngames_list[0];
            }, 250);
            const img_1 = document.querySelector(".img1");
            img_1.src ="../img/n1.jpeg";
        }else if(title.innerText !== ""){
            tag.style.height = '0px';
            tag.style.transition = '0.25s';
            tag.style.opacity = '1';
            title.innerText = "";
        }
    }
    if(target === "ng2"){ // if getting present target id is "ng2"
        if(title.innerText === ""){
            tag.style.height = '30px';
            tag.style.transition = '0.5s';
            tag.style.opacity = '0.3';
            setTimeout(function(){
                title.innerText = ngames_list[1];
            }, 250);
            const img_1 = document.querySelector(".img1");
            img_1.src ="../img/n2.jpeg";
        }else if(title.innerText !== ""){
            tag.style.height = '0px';
            tag.style.transition = '0.25s';
            tag.style.opacity = '1';
            title.innerText = "";
        }
    }
    if(target === "ng3"){ // if getting present target id is "ng3"
        if(title.innerText === ""){
            tag.style.height = '30px';
            tag.style.transition = '0.5s';
            tag.style.opacity = '0.3';
            setTimeout(function(){
                title.innerText = ngames_list[2];
            }, 250);
            const img_1 = document.querySelector(".img1");
            img_1.src ="../img/n3.jpeg";
        }else if(title.innerText !== ""){
            tag.style.height = '0px';
            tag.style.transition = '0.25s';
            tag.style.opacity = '1';
            title.innerText = "";
        }
    }
    if(target === "ng4"){ // if getting present target id is "ng4"
        if(title2.innerText === ""){
            tag2.style.height = '30px';
            tag2.style.transition = '0.5s';
            tag2.style.opacity = '0.3';
            setTimeout(function(){
                title2.innerText = ngames_list[3];
            }, 250);
            const img_2 = document.querySelector(".img2");
            img_2.src ="../img/n4.jpeg";
        }else if(title2.innerText !== ""){
            tag2.style.height = '0px';
            tag2.style.transition = '0.25s';
            tag2.style.opacity = '1';
            title2.innerText = "";
        }
    }
    if(target === "ng5"){ // if getting present target id is "ng5"
        if(title2.innerText === ""){
            tag2.style.height = '30px';
            tag2.style.transition = '0.5s';
            tag2.style.opacity = '0.3';
            setTimeout(function(){
                title2.innerText = ngames_list[4];
            }, 250);
            const img_2 = document.querySelector(".img2");
            img_2.src ="../img/n5.jpeg";
        }else if(title2.innerText !== ""){
            tag2.style.height = '0px';
            tag2.style.transition = '0.25s';
            tag2.style.opacity = '1';
            title2.innerText = "";
        }
    }
    if(target === "ng6"){ // if getting present target id is "ng6"
        if(title2.innerText === ""){
            tag2.style.height = '30px';
            tag2.style.transition = '0.5s';
            tag2.style.opacity = '0.3';
            setTimeout(function(){
                title2.innerText = ngames_list[5];
            }, 250);
            const img_2 = document.querySelector(".img2");
            img_2.src ="../img/n6.jpeg";
        }else if(title2.innerText !== ""){
            tag2.style.height = '0px';
            tag2.style.transition = '0.25s';
            tag2.style.opacity = '1';
            title2.innerText = "";
        }
    }
}

// function create
bgames[0].addEventListener("click", clickBgames);
bgames[1].addEventListener("click", clickBgames);
bgames[2].addEventListener("click", clickBgames);
bgames[3].addEventListener("click", clickBgames);
bgames[4].addEventListener("click", clickBgames);
bgames[5].addEventListener("click", clickBgames);

ngames[0].addEventListener("click", clickBgames);
ngames[1].addEventListener("click", clickBgames);
ngames[2].addEventListener("click", clickBgames);
ngames[3].addEventListener("click", clickBgames);
ngames[4].addEventListener("click", clickBgames);
ngames[5].addEventListener("click", clickBgames);

//---------------------------------------------------------------------/
// card hover
const platform_text = document.querySelector("#platform_open");
$(function(){
    $(".game_platform").click(function(){
        if(platform_text.innerText === "OPEN"){
            $(".first_card_body").animate({height:169},500,"swing");
            document.querySelector(".first_card_body").style.opacity = "0.5";

            $(".second_card_body").animate({height:169},500,"swing");
            document.querySelector(".second_card_body").style.opacity = "0.5";

            $(".third_card_body").animate({height:169},500,"swing");
            document.querySelector(".third_card_body").style.opacity = "0.5";  

            setTimeout(function(){
                document.querySelector("#first_card_text").style.display = "block";
                document.querySelector("#second_card_text").style.display = "block";
                document.querySelector("#third_card_text").style.display = "block";
            }, 250);
            platform_text.innerText = "CLOSE"; 
        }
        else if(platform_text.innerText === "CLOSE"){
            $(".first_card_body").animate({height:0},500,"swing");
            document.querySelector(".first_card_body").style.opacity = "0.5";

            $(".second_card_body").animate({height:0},500,"swing");
            document.querySelector(".second_card_body").style.opacity = "0.5";

            $(".third_card_body").animate({height:0},500,"swing");
            document.querySelector(".third_card_body").style.opacity = "0.5"; 

            setTimeout(function(){
                document.querySelector("#first_card_text").style.display = "none";
                document.querySelector("#second_card_text").style.display = "none";
                document.querySelector("#third_card_text").style.display = "none";
            }, 250);
            platform_text.innerText = "OPEN"; 
        }
    });
});        

