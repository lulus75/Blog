    $(function () {
        $("textarea").jqte();
        $("#editArticle").jqte();
        $('form').submit(function () {
            $('#errorBloc').html('');
            $.ajax({
                url: '../controller/articleEditController.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType :'json',
                error: function (data, statut, error) {
                    data = JSON.parse(data.responseText);
                    $('#errorBloc').html(data.errors);
                },
                success: function (data) {
                    $('#successBloc').html('<br>'+'Article edit success !');
                }
            });
            return false;
        });
    });