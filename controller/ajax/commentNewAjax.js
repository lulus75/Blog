$(function () {
    $('.newComment').submit(function () {
        $('.errorBloc').html('');
        $.ajax({
            url: '../controller/articlespageController.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            error: function (data, status, error) {
                var toPrint = '';
                data = JSON.parse(data.responseText);
                toPrint += data.errors;
                $('.errorBloc').html(toPrint);
            },
            success: function(data) {
                $('.successBloc').html('<br>'+"comment add with success");
            }
        });
        return false;
    });
});     