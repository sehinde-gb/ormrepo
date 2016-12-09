//alert('hello');

$(document).ready(function() {
    $('#i-nav').click(function() {
       $(this).toggleClass('open');
       $('ul').toggleClass('show');
        //alert('hello');
    });
});