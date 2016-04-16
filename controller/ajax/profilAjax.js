$(function () {
    $('form').submit(function () {
        $('#errorBloc').html('');
        $.ajax({
            url: '../controller/profilController.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data){
                var toPrint = 'username : '+data.user.login+'<br>';
                toPrint += 'firstname : '+data.user.firstname +'<br>';
                toPrint += 'lastname : '+data.user.lastname +'<br>';
                toPrint += 'gender : '+data.user.gender+'<br>';
                toPrint += 'email : '+data.user.email +'<br>';
                toPrint += 'Redirection'+'<br>';
                $('#successBloc').html(toPrint+'<meta http-equiv="refresh" content="1; URL=../view/profil.php">');
            },
            error: function(data, status, error) {
                var toPrint = '';

                data = JSON.parse(data.responseText);
                    toPrint += data.errors;

                $('#errorBloc').html(toPrint);
            }
        });

        return false;
    });
});