<?php
require_once('../controller/profilDisplayController.php');
require_once('../view/header.php');
session_start()
?>

    <title>Member</title>
    <link rel="stylesheet" href="../public/css/memberList.css">
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
?>
    <h1 class="titlePage">[ Member List ]</h1>

    <div class="container">

        <table class="articleListTable" rules="all">
            <tr>
                <th class="titleTable">Login</th>
            </tr>

                <?php foreach($result as $login){

                    echo('<tr>
                            <td>
                                <a class="articleUrl" href="../view/memberProfil.php?id='.$login[0].'">'.$login[1].'</a>
                            </td>
                          </tr>');
                }
                ?>
        </table>
    </div>

<?php require_once ('../view/footer.php');?>