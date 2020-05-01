document.addEventListener('DOMContentLoaded',function(){
    var status = 'under100';
    var navbar = document.getElementById('Nav');
    window.addEventListener('scroll',function(){
        if ( window.pageYOffset > 100){
            if ( status == 'under100') {
                status = 'over100';
                navbar.classList.add('fixedTop');
                navbar.classList.add('animated');
                navbar.classList.add('fadeInDown');
            }
        }
        else if ( window.pageYOffset < 100) {
            if ( status == 'over100' ) {
                status = 'under100';
                navbar.classList.remove('fixedTop');
                navbar.classList.remove('animated');
                navbar.classList.remove('fadeInDown');
            }
        }
    })
},false);



















$(document).ready(function () {
    // TAB
    $('.list-tab span').on('click',function(e){
        e.preventDefault();
        $('.list-tab span').removeClass('active');
        $(this).addClass('active');

        var number = $(this).parent().index() +1;
        $('ul li ._1tab').removeClass('show');
        $('ul li:nth-child(' + number +') ._1tab').addClass('show');
    });
    
    //Feedback Slide
    $('.fb-slide').owlCarousel({
        items: 1,
        loop: true,
    });

    // Chef's avatar
    $('.slide-chef-avatar').owlCarousel({
        items: 3,
        margin: 100,
        loop: true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        autoplaySpeed: 1000,
        responsive:{
            0:{
                items:1,
                margin: 50,
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    //Hidden-navigation
    $('button.open-button').on('click',function(e){
        e.preventDefault();
        $('#hidden-nav').toggleClass('opened');
        $('.overlay-all').toggleClass('apperance');
        if ($('#hidden-nav').hasClass('opened')){
            $('html,body').css('overflow','hidden');
        }
        else {
            $('html,body').css('overflow','visible');
        }
    })

    $('.overlay-all').on('click',function(){
        $('#hidden-nav').removeClass('opened');
        $(this).removeClass('apperance');
        $('html,body').css('overflow','visible');
    });

    //SLide Dish Thumbnail 


    $('._1dish-inner ul li span.name a').on('click',function(e){
        e.preventDefault();
        $(this).parent().parent().parent().next().toggleClass('show-2');
        $('.overlay-detail-info').toggleClass('show-3');
    })

    $('.overlay-detail-info').on('click',function(e){
        $(this).removeClass('show-3');
        $('.detail-info').removeClass('show-2');
    })

    //Gallery
    $('._1-box a').fancybox({
        animationEffect: "zoom-in-out",
        animationDuration: 600,
        zoomOpacity: "auto"
    })

    // WOW.js
    new WOW().init();
});