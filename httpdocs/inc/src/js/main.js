//    function to open mobile menu

jQuery('.js-mobile-menu-btn').on("click", function (e) {
    e.preventDefault();
    jQuery('.js-mobile-menu-btn .fa').toggleClass('fa-bars fa-times');
    jQuery('body').toggleClass('show-mobile-menu');
    return false;
});


//fade in first image 500px from top of window

jQuery(function(){

    if (typeof scrollTop !== 'undefined') {

    }else{

    jQuery(document).scroll(function(){
        if(jQuery(this).scrollTop() >= jQuery('.js-fade-image-one').offset().top - 500) {
            jQuery(".js-fade-image-one").addClass('animated fadeIn');
        }
    });

    //fade in second image 500px from top of window

    jQuery(document).scroll(function(){
        if(jQuery(this).scrollTop() >= jQuery('.js-fade-image-two').offset().top - 500) {
            jQuery(".js-fade-image-two").addClass('animated fadeIn');
        }
    });

    }
});


//Form styles

jQuery("form input").focus(function() {
    jQuery("." + this.id + "").addClass("labelfocus");
});


jQuery("form textarea").focus(function() {
    jQuery("." + this.id + "").addClass("labelfocus");
});


