//$("div").each(function(){
//     $(this).hide();
//    if($(this).attr('id') == 'main') {
//        $(this).show();
//    }
//});
//
//$('a').on( "click", function(e) {
//    e.preventDefault();
//    var id = $(this).attr('data-related');
//    $("div").each(function(){
//        $(this).hide();
//        if($(this).attr('id') == id) {
//            $(this).show();
//        }
//    });
//});

$('#shapes a.dropdown-item').on( "click", function(e) {
    var $el = $(this);
    //    alert($el.data('shape'));
    $(".shape div").attr('id', $el.data('shape'));

});

$('#colors a.dropdown-item').on( "click", function(e) {
    var $el = $(this);
    //    alert($el.data('shape'));
    $(".shape div").removeClass();
    $(".shape div").addClass($el.data('color'),'shape');

});
