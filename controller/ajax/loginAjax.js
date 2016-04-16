$(function () {
    $('form').submit(function () {
        $('#errorBloc').html('');
        $.ajax({
            url: '../controller/loginController.php',
            type: 'POST',
            data: $(this).serialize(),
            error: function (data, statut, error) {
                data = JSON.parse(data.responseText);
                $('#errorBloc').html(data.errors);
            },
            success: function (data) {
                    console.log(data);
                   $('#successBloc').html('<br>'+'Connexion reussie,'+'<br>'+'Redirection.'+ '<meta http-equiv="refresh" content="0.5; URL=../public/index.php">');
                }
        });
        return false;
    });
});

