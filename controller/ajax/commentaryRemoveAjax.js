$(function () {
    $('.deleteComment').on('submit',function (e) {
        $('.errorBloc').html('');
        $.ajax({
            url: '../controller/commentaryDeleteController.php',
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

                $('.successBloc').html("comment Delete with success"+'<meta http-equiv="refresh" content="1">');

            }
        });

        e.preventDefault();
    });

});