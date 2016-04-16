$(function($){

    //default color in input color
    $('.picker').val('#60729e');

    var bodyColor =  localStorage.getItem('body');
    var bodyFontColor =  localStorage.getItem('*');
    var divColor =  localStorage.getItem('div');
    var trColor =  localStorage.getItem('tr');

    $('body').css("background-color",bodyColor);
    $('*').css("color",bodyFontColor);
    $('.articles').css("background-color",divColor);
    $('td').css("background-color",trColor);
    $.fn.changeColor = function() {
        $('.picker1').change(function(){
            $('body').css('background', $(this).val());
            localStorage.setItem('body',$(this).val());
         });

        $('.picker2').change(function(){
            $('.articles').css('background', $(this).val());
            localStorage.setItem('.articles',$(this).val());
        });
        $('.picker3').change(function(){
            $('*').css('color', $(this).val());
            localStorage.setItem('*',$(this).val());

        });
        $('.picker4').change(function(){
            $('td').css('background', $(this).val ());
            localStorage.setItem('tr',$(this).val());
        });
        $('.reset').on('click',function(){
            localStorage.removeItem('body');
            localStorage.removeItem('div');
            localStorage.removeItem('*');
            localStorage.removeItem('tr');
            location.reload();
        });
        $('.options').on('click',function(){
            $('.volet').slideToggle(1500);

        });
        $('.close').on('click',function(){
            $('.volet').slideToggle(1500);

        });


    };
    $("body * .articles td").changeColor();
});