$(function () {
    $("textarea").jqte();
    $(".new").jqte();
    $('form').submit(function () {
        $('#errorBloc').html('');
        $.ajax({
            url: '../controller/articlesNewController.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            error: function (data, status, error) {
                var toPrint = '';
                data = JSON.parse(data.responseText);
                toPrint += data.errors;
                $('#errorBloc').html(toPrint);
            },
            success: function(data) {
                console.log(data);
                $('#successBloc').html('<br>'+"article add with success"+'<meta http-equiv="refresh" content="1; URL=../public/index.php">');
            }
        });
        return false;
    });
});