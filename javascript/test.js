$(document).ready(function(){

    $('li').mouseenter(function(){
        $(this).css('border-style','solid');
    });
    $('li').mouseleave(function(){
        $(this).css('border-style','hidden');
    });

});
