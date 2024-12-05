$(document).ready(function () {

    $('.header-sidebar-btn,.btn-sidebar-close').click(function () {
        $('.header-sidebar-container').toggleClass('header-sidebar-inactive header-sidebar-active');
        $('.background-backdrop').toggleClass('backdrop-active backdrop-inactive');
    });

    $('.background-backdrop').click(function () {
        $('.header-sidebar-container').toggleClass('header-sidebar-inactive header-sidebar-active');
        $('.background-backdrop').toggleClass('backdrop-active backdrop-inactive');
    });

});