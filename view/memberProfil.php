<?php
session_start();
require_once('../controller/profilDisplayController.php');
require_once('../view/header.php');
?>

    <title>Member</title>
    <link rel="stylesheet" href="../public/css/memberProfil.css">
    <script src="../lib/plugin/colorChangePlugin/script.js"></script>
     <link rel="stylesheet" href="../lib/plugin/colorChangePlugin/techPlugin.css">
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
<?php
    require_once("../lib/plugin/colorChangePlugin/volet.php");
?>v
    <h1 class="titlePage">[ Détail du profil ]</h1>

    <table class="articleDetailTable" rules="all">
        <tr>
            <th class="titleTable">Login</th>
            <th class="titleTable">Member Date</th>
        </tr>
        <tr>
            <th class="profilDisplay">
                <?php foreach ($log as $disp)
                {
                    $log = $disp;
                    echo($log);
                }
                ?>
            </th>
            <th class="profilDisplay">
                <?php foreach ($mbDate as $disp)
                {
                    $mbDate = $disp;
                    echo($mbDate);
                }
                ?>
            </th>
        </tr>
    </table>

    <table class="articleDetailTable" rules="all">
        <tr>
            <th class="titleTable">First name</th>
            <th class="titleTable">Last name</th>
        </tr>
        <tr>
            <th class="profilDisplay">
                <?php foreach ($firstname as $disp)
                {
                    $firstname = $disp;
                    echo($firstname);
                }
                ?>
            </th>
            <th class="profilDisplay">
                <?php foreach ($lastname as $disp)
                {
                    $lastname = $disp;
                    echo($lastname);
                }
                ?>
            </th>
        </tr>
    </table>

    <table class="articleDetailTable" rules="all">
        <tr>
            <th class="titleTable">Gender</th>
            <th class="titleTable">Birthdate</th>
        </tr>
        <tr>
            <th class="profilDisplay">
                <?php foreach ($gender as $disp)
                {
                    $gender = $disp;
                    echo($gender);
                }
                ?>
            </th>
            <th class="profilDisplay">
                <?php foreach ($birthdate as $disp)
                {
                    $birthdate = $disp;
                    echo($birthdate);
                }
                ?>
            </th>
        </tr>
    </table>

    <table class="articleDetailTable" rules="all">
        <tr>
            <th class="titleTable">E-mail</th>
        </tr>
        <tr>
            <th class="profilDisplay">
                <?php foreach ($email as $disp)
                {
                    $email = $disp;
                    echo($email);
                }
                ?>
            </th>
        </tr>
    </table>

<?php include_once('../view/footer.php');?>