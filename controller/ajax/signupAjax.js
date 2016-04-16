$(function () {
    $('form').submit(function () {
        $('#blocErreur').html('');
        $.ajax({
            url: '../controller/registerController.php',
            method: 'POST',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(data){
                var toPrint = 'username : '+data.user.username+'<br>';
                    toPrint += 'firstname : '+data.user.firstname +'<br>';
                    toPrint += 'lastname : '+data.user.lastname +'<br>';
                    toPrint += 'gender : '+data.user.gender+'<br>';
                    toPrint += 'email : '+data.user.email +'<br>';
                    toPrint += 'Redirection'+'<br>';
                $('#blocSuccess').html(toPrint+'<meta http-equiv="refresh" content="2; URL=../public/index.php">');
            },
            error: function(data, status, error) {
                var toPrint = '';

                data = JSON.parse(data.responseText);
                for(var d in data.errors){
                    toPrint += d + ':'+data.errors[d]+'<br><br>';
                }
                $('#blocErreur').html(toPrint);
            }
        });

        return false;
    });
});