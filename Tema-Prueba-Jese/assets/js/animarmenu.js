$(document).ready(function () {
    $(window).on("scroll",animarMenu);
    if($(document).scrollTop() != 0){
        animarMenu();
    }

    function animarMenu(){
        if($(window).scrollTop() == 0){
            $(".navbar").removeClass('navegadorespecialEfecto');
        }else{
            $(".navbar").show().addClass('navegadorespecialEfecto');
        }
    }

});