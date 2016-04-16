$(function(){
    $('.commentNumber').on('click',function(){
        $(this).parent().nextAll('.comment').first().slideToggle(1500);

    });
});