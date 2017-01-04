$(document).ready(function () {

    smoothScroll.init();
   
    $(window).scroll(function () {
        var wh = $(this).height();
        if ($(this).scrollTop() > '500') {
            $('.divCont').animate({
                marginLeft: '0px',
                opacity: 1
            }, 1000);
        }
        if ($(this).scrollTop() > wh) {
            $('.divCont2').animate({
                marginLeft: '0px',
                opacity: 1
            }, 1000);
        }
        if ($(this).scrollTop() > wh * 2 + 200) {
            $('.divCont3').animate({
                marginLeft: '0px',
                opacity: 1
            }, 1000);
        }
        if ($(this).scrollTop() > wh * 3 + 200) {
            $('.divCont4').animate({
                marginLeft: '0px',
                opacity: 1
            }, 1000);
        }

    });

    // 
    $('.scrl').height($(window).height());
    $('.windowSize').height($(window).height());
    $(window).resize(function () {
        $('.scrl').height($(window).height());
        $('.windowSize').height($(window).height());
    });

    $('.main').height($(window).height());
    $(window).resize(function () {
        $('.main').height($(window).height());
    });


    $(function () {
        $(".backColor h1").typed({
            strings: ["MILESTONE", "PROPERTY BEST SELECTION"],
            typeSpeed: 100,
            backDelay: 500,
            loop: false,
            contentType: 'html', // or text
            // defaults to false for infinite loop
            loopCount: false,
        });
    });

    // ProItems
    $('.proItem').hover(function () {
        $(this).children('.proText').animate({bottom: "0px"}, 100);
    });
    $('.proItem').mouseleave(function () {
        $(this).children('.proText').animate({bottom: "-65px"}, 100);
    });

    // More units
    $('.moreUnits').hover(function () {
        $(this).children('.fa').animate({marginLeft: "10px"}, 100);
    });
    $('.moreUnits').mouseleave(function () {
        $(this).children('.fa').animate({marginLeft: "0px"}, 100);
    });

    // Navigation bar inside links
    $('.drop').click(function () {
        $(this).children('.droped').slideToggle(150);
    });

    // Open Navigation bar
    $('.openIt').on("click", function () {
        $(".bottomHeader").animate({
            right: "0px"
        }, 400, function () {
            $('.openIt').fadeOut(0);
            $('.barNav').fadeIn(0);
        });
    });

    // Close Navigation bar
    $('.closeNav, .barNav').on("click", function () {
        $(".bottomHeader").animate({
            right: "-300px"
        }, 400, function () {
            $('.barNav').fadeOut(0);
            $('.openIt').fadeIn(0);
        });
    });

    //
    $("#search").on("click", function () {
        $(".search").slideToggle(100);
        $(this).css({
            background: "#0E162F",
            color: "#fff"
        });
    });

    //CloseMessages
    setTimeout(function () {
        $('.mesg').animate({
            opacity: '0'
        }, 500, function () {
            $('.mesg').slideUp(500);
        });
    }, 2000);
    
    // Slider
    $('.flexslider').flexslider({
        animation: "slide"
    });

    // Nice Scroll intial
//    $("html").niceScroll({
//        cursorcolor: "rgba(0,0,0,.8)",
//        autohidemode: false,
//        cursorborder: "not",
//        cursorborderradius: "0px", 
//        cursorwidth: "8px",
//        zindex: "10000"
//    });

    // Send Ajax Form
    $("form.ajax").on("submit",function (){
        var url = $(this).attr("action");
        var name = $(this).children("#name").val();
        var email = $(this).children("#email").val();
        var phone = $(this).children("#phone").val();
        var message = $(this).children("#message").val();        
        
        $.post(url,{
            name:name,
            email:email,
            phone:phone,
            message:message
        },function (output){
            $('.msg').html(output);
            clearFields(name);
        });
       
        function clearFields(field){
            field = "";
        }
        return false;
    });
    
    
    // 
    $(window).scroll(function (){
        if ($(this).scrollTop() > 350) {
            $('.moveUp').fadeIn();
        }else{
            $('.moveUp').fadeOut();
        }
    });

});

