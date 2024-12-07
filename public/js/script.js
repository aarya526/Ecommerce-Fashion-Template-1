$(document).ready(function () {

    $('.header-sidebar-btn,.btn-sidebar-close').click(function () {
        $('.header-sidebar-container').toggleClass('header-sidebar-inactive header-sidebar-active');
        $('.background-backdrop').toggleClass('backdrop-active backdrop-inactive');
    });

    $('.background-backdrop').click(function () {
        $('.header-sidebar-container').toggleClass('header-sidebar-inactive header-sidebar-active');
        $('.background-backdrop').toggleClass('backdrop-active backdrop-inactive');
    });

    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 150,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    }
    );

});