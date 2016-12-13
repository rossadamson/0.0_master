//    function to open mobile menu

$('.js-mobile-menu-btn').on("click", function (e) {
    e.preventDefault();
    $('.js-mobile-menu-btn .fa').toggleClass('fa-bars fa-times');
    $('body').toggleClass('show-mobile-menu');
    return false;
});
