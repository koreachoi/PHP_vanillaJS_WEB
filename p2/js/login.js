$(function(){ // password display checking function 
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
