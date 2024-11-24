$(document).ready(function() {

    let throttleTimer;
    const throttleDelay = 150; 

    $(window).on('scroll', function() {
        if (!throttleTimer) {
            throttleTimer = setTimeout(function() {
                const scrollPosition = $(window).scrollTop();
                //console.log('Scroll position:', Math.round(scrollPosition));

                // Calculate background position for '.testimonials'
                let backgroundPositionY;
                if (scrollPosition <= 235) {
                    backgroundPositionY = -200;
                } else if (scrollPosition >= 2000) {
                    backgroundPositionY = -60;
                } else {
                    const progress = (scrollPosition - 235) / (2000 - 235);
                    backgroundPositionY = -200 + progress * (-60 - -200);
                }
                $('.testimonials').css('background-position', `center ${backgroundPositionY}px`);

                // Calculate background position for '.our-mission'
                let backgroundPositionTwoY;
                if (scrollPosition <= 2113) {
                    backgroundPositionTwoY = -200;
                } else if (scrollPosition >= 4700) {
                    backgroundPositionTwoY = -60;
                } else {
                    const progressTwo = (scrollPosition - 2113) / (4700 - 2113);
                    backgroundPositionTwoY = -200 + progressTwo * (-60 - -200);
                }
                $('.our-mission').css('background-position', `center ${backgroundPositionTwoY}px`);

                throttleTimer = null; 
            }, throttleDelay);
        }
    });

    // let parallax__img1 = document.getElementsByClassName('parallax__img1');

    // new simpleParallax(parallax__img1, {
    //     orientation: 'up'
    // });

    // let parallax__img2 = document.getElementsByClassName('parallax__img2');

    // new simpleParallax(parallax__img2, {
    //     orientation: 'up'
    // });

    $('.hamburger').click(function(e){
        e.preventDefault();
        $(this).toggleClass('is-active');
        $(".main-menu__menu").addClass('active');
        $(".main-menu__close").addClass('active');
        $("body").addClass('body-active');
    });

    $('.main-menu__close').click(function(e){
        e.preventDefault();
        $(".main-menu__menu").removeClass('active');
        $(".main-menu__close").removeClass('active');
        $(".hamburger").removeClass('is-active');
        $("body").removeClass('body-active');
    });

    $('.home-carousel').owlCarousel({
        autoplayTimeout: 10000,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        navText: [
            '<img src="images/prev.svg">',
            '<img src="images/next.svg">',
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        },
        animateOut: 'fadeOut'
    });

    $('.owl-testimonial').owlCarousel({
        autoplayTimeout: 10000,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        navText: [
            '<img src="images/prev.svg">',
            '<img src="images/next.svg">',
        ],
        responsive:{
            0:{
                items:1
            },
            560:{
                items:2
            },
            880:{
                items:3
            },
            1360:{
                items:4
            }
        },
        animateOut: 'fadeOut'
    });

    $('.owl-mission').owlCarousel({
        autoplayTimeout: 10000,
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        autoplay: true,
        autoPlaySpeed: 5000,
        navText: [
            '<img src="images/prev.svg">',
            '<img src="images/next.svg">',
        ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        },
        animateOut: 'fadeOut'
    });

});