

//function to change the shape of the object

$('#shapes a.dropdown-item').on( "click", function(e) {
    var $el = $(this);
    //    alert($el.data('shape'));
    $(".shape div").attr('id', $el.data('shape'));

});

//function to change the colour of the object

$('#colors a.dropdown-item').on( "click", function(e) {
    var $el = $(this);
    //    alert($el.data('shape'));
    $(".shape div").removeClass();
    $(".shape div").addClass($el.data('color'),'shape');

});

//function to move the object

$('#move-btn').on( "click", function(e) {

    $(".shape").addClass('keep-on-moving');
     setTimeout(function(){
            $(".shape").removeClass('keep-on-moving');
    }, 5000);

});

//function to blur the object

$('#blur-btn').on( "click", function(e) {

    $(".shape").addClass('blur-shape');
     setTimeout(function(){
            $(".shape").removeClass('blur-shape');
    }, 5000);

});


