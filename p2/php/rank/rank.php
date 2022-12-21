<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        $id = "none";
        $pw = "none";
        $name = "none";
    }else{
        $id = $_SESSION['uid'];
        $pw = $_SESSION['upw'];
        $name = $_SESSION['uname'];
    }
?>
<?php
    error_reporting(E_ALL); // php error page
    ini_set('display_errors', '1'); // php error message

    $db_host = "localhost:3306";
    $db_user = "root";
    $db_pw = "chldnjsgh98!";
    $db_name = "games";
    $mysqli = new mysqli($db_host, $db_user, $db_pw, $db_name);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/f714f8ef10.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../../css/rank_style.css">
    <title>Document</title>
</head>
<body>
<div class="content">
<!--********************************* header content *********************************-->
<div class="header">
    <div class="sub_header">
        <div class="logo">Rank</div>
        <div class="header_menu"><a href="../../index.php">Home</a></div>
        <div class="header_type_menu"><a href="../console.php">Community</a></div>
        <div class="header_community_menu"><a href="rank.php">Rank</a></div>
        <div class="header_menu"><a href="../support.php">Support</a></div>
        <div class="sign_up_menu"><a href="../signup.php">Sign up</a></div>
        <?php
            if($id == "none"){
                ?><div class="log_in_menu"><a href="../login.php">Log In</a></div><?php
            }else if($id != "none"){
                ?><div class="log_out_menu"><a href="../logout.php">Log out</a></div><?php
            }
        ?>
    </div>
</div>
<!--********************************* Main content *********************************-->
<div class="main">
    <div class="sub_main">
        <div class="footer_line"></div>
        <div class="footer">
            <span>Create by CHOI</span>
        </div>
    </div>
</div>
</div>
<script src="../../js/rank.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>