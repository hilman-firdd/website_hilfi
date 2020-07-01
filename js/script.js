// preloader
$(window).on('load', function () {
    $('.status').fadeOut();
    $('.preloader').delay(350).fadeOut('slow');
});

// owl carousel
// team
$(document).ready(function () {
    $("#team-members").owlCarousel({
        items: 2,
        autoplay: true,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
    });
});


// responsive tabs

$(function () {

    $('#divisions-tabs').responsiveTabs({
        animation: 'slide'
    });

});

// isotope

$(window).on('load', function () {
    // initial
    $('#container-isotope').isotope({

    });

    // filter items on button click
    $('#isotope-filters').on('click', 'button', function () {
        // get filter value
        let filterVal = $(this).attr('data-filter');

        // filter portofolio
        $('#container-isotope').isotope({
            filter: filterVal
        });

        //active button
        $('#isotope-filters').find('.active').removeClass('active');
        $(this).addClass('active');
    })
});

// magnifier

$(function () {
    $("#portofolio-wrapper").magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {
            enabled: true
        }
    });
});

// kata kata

$(function () {
    $('#kata-slider').owlCarousel({
        items: 1,
        autoplay: false,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
    });
});

// smooth scrolling

$(function () {
    $('.smooth').click(function (e) {
        e.preventDefault();

        let section_id = $(this).attr('href');

        $('html, body').animate({
            scrollTop: $(section_id).offset().top + 5
        }, 1250, "easeInOutExpo");
    });
});

$(function () {
    showHideNav();

    $(window).scroll(function () {
        showHideNav();
    });

    function showHideNav() {

        if ($(window).scrollTop() > 50) {

            $('nav').addClass('white-nav-top');
            $('.navbar-brand img').attr('src', 'assets/logo/logo.png');
            $('#back-to-top').fadeIn();
        } else {

            $('nav').removeClass('white-nav-top');

            $('.navbar-brand img').attr('src', 'assets/logo/logo.png');
            $('#back-to-top').fadeOut();
        }
    }

});