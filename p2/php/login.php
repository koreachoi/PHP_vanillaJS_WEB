<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        $id = "none";
        $pw = "none";
        $name = "none";
        #echo "<script>location.replace('php/login.php');</script>";

    }else{
        $id = $_SESSION['uid'];
        $pw = $_SESSION['upw'];
        $name = $_SESSION['uname'];
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/f714f8ef10.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/login_style.css">
    <title>Document</title>
</head>
<body>
<div class="content">
<!--********************************* header content *********************************-->
<div class="header">
    <div class="sub_header">
        <div class="logo">Login</div>
        <div class="header_menu"><a href="../index.php">Home</a></div>
        <div class="header_type_menu"><a href="console.php">Community</a></div>
        <div class="header_community_menu"><a href="rank/rank.php">Rank</a></div>
        <div class="header_menu"><a href="support.php">Support</a></div>
        <div class="sign_up_menu"><a href="signup.php">Sign up</a></div>
        <div class="log_in_menu"><a href="login.php">Log In</a></div>
    </div>
</div>
<!--********************************* Main content *********************************-->
<div class="main">
     <div class="sub_main">
        <div class="login_layout">
            <div class="login_text">LOGIN</div>
            <form class="login_box" method="post" action="check_login.php">
                <p><input type="text" name="id" class="id_box" placeholder="ID"></p>
                <p><input type="password" name="pw" class="pw_box" placeholder="Password">
                <div class="pw_eyes"><i id = "pw_eyes" class="fa-solid fa-eye-slash"></i></div>
                </p>
                <p><button class="login_button">Log In</button></p>
            </form>
        </div>
        <div class="footer_line"></div>
        <div class="footer">
            <span>Create by CHOI</span>
        </div>
    </div>
</div>
</div>
<script src="../js/login.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>