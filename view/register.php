<?php
require_once ('../view/header.php');

?>
    <title>S'inscrire</title>
    <link rel="stylesheet" href="../public/css/register.css">
    <script src="../controller/ajax/signupAjax.js"></script>
</head>

<body>

    <header>
        <div class="title">
            <a class="noStyle" href="../public/" <p class="TitleColorBlue">TECH</p> <p>'</p> <p class="TitleColorGreen">NOW</p> </a>

            <div id="navigation">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <?php
        require_once('../view/navMobile.php');
        require_once('../view/navDesktop.php');
        ?>
    </header>
<div class="container">
    <h1 class="titlePage">[ REGISTER ]</h1>

    <form class="registerForm">

        <label>
            <span>Pseudo:</span>
            <input type="text" id="username" name="username" >
        </label>

        <label>
            <span>FirstName:</span>
            <input type="text" id="firstname" name="firstname" >
        </label>

        <label>
            <span>LastName:</span>
            <input type="text" id="lastname" name="lastname" >
        </label>

        <label>
            <span>Gender:</span>
            <input type="radio" name="gender" value="Male" checked>Male
            <input type="radio" name="gender" value="Female">Female<br><br>
        </label>

        <label>
            <span>Birthdate:</span>
            <input type="date" id="birthdate" name="birthdate" >
        </label>

        <label>
            <span>Email:</span>
            <input type="email" id="email" name="email" >
        </label>

        <label>
            <span>Password:</span>
            <input type="password" id="password" name="pwd" >
        </label>

        <label>
            <span>Confirm:</span>
            <input type="password" id="passwordConfirm" name="pwd2" >
        </label>

        <input type="submit" class="button" value="Send">
    </form>


    <div id="blocErreur"></div>
    <div id="blocSuccess"></div>
</div>
<?php require_once ('../view/footer.php');?>
