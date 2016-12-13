//    function to open mobile menu

$('.js-mobile-menu-btn').on("click", function (e) {
    e.preventDefault();
    $('.js-mobile-menu-btn .fa').toggleClass('fa-bars fa-times');
    $('body').toggleClass('show-mobile-menu');
    return false;
});


//fade in first image 500px from top of window

$(function(){
    $(document).scroll(function(){
        if($(this).scrollTop() >= $('.js-fade-image-one').offset().top - 500) {
            $(".js-fade-image-one").addClass('animated fadeIn');
        }
    });
});

//fade in second image 500px from top of window

$(function(){
    $(document).scroll(function(){
        if($(this).scrollTop() >= $('.js-fade-image-two').offset().top - 500) {
            $(".js-fade-image-two").addClass('animated fadeIn');
        }
    });
});
