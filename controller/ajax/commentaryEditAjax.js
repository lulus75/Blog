$(function() {
    $('.btn').on('click',function(e){
            $(this).hide().prevAll('.commentDisp').hide();
            $(this).parent().find(".editComment").show();
            $(this).parent().find(".contentFormHide").show().focus();
            $(this).nextAll(".cancel").show();
        $(this).next('.edit').show();
        e.preventDefault();
        });

    $('.cancel').on('click',function(e){

        $(this).hide();
        $(".editComment").hide();
        $(".contentFormHide").hide();
        $(".btn").show();
        $('.commentDisp').show();
        $(this).prev('.edit').hide();
        e.preventDefault();

    });
    $('.edit').on('submit',function (e) {
        $('.errorBloc').html('');
        $.ajax({
            url: '../controller/commentaryEditController.php',
            method: 'GET',
            data: $(this).serialize(),
            dataType: 'json',
            error: function (data, status, error) {
                var toPrint = '';
                data = JSON.parse(data.responseText);
                toPrint += data.errors;
                $('.errorBloc').html(toPrint);
            },
            success: function(data) {

                $('.successBloc').html("comment Edit with success");
            }
        });

        e.preventDefault();
    });

});