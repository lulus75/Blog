$(document).ready(function(){
    var body = $('html');
    var navigationBar = $('.navigationBar');

    $('#navigation').click(function(){
        $(this).toggleClass('open');
    });
    $('#navigation').click(function(){
        $(body).toggleClass('navMobile');
    });
    $('#navigation').click(function(){
        $(navigationBar).toggleClass('open');
    });
});