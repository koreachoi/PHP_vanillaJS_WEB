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
    <link rel="stylesheet" type="text/css" href="../css/signup_style.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
<!--********************************* header content *********************************-->
<div class="header">
    <div class="sub_header">
        <div class="logo">Sign up</div>
        <div class="header_menu"><a href="../index.php">Home</a></div>
        <div class="header_type_menu"><a href="console.php">Community</a></div>
        <div class="header_community_menu"><a href="rank/rank.php">Rank</a></div>
        <div class="header_menu"><a href="support.php">Support</a></div>
        <div class="sign_up_menu"><a href="signup.php">Sign up</a></div>
        <?php
            if($id == "none"){
                ?><div class="log_in_menu"><a href="login.php">Log In</a></div><?php
            }else if($id != "none"){
                ?><div class="log_out_menu"><a href="logout.php">Log out</a></div><?php
            }
        ?>
    </div>
</div>
<!--********************************* Main content *********************************-->
<div class="main">
    <div class="sub_main">
        <div class="signup_layout">
            <span class="chk_id">no</span>
            <span class="chk_na">no</span>
            <span class="chk_pw">no</span>
            <div class="signup_text">SIGN UP</div>
            <form class="signup_box" method="post" action="ok_signup.php">
                <p><input type="text" name="id" class="id_box" placeholder="id" maxlength="12"></p>
                <p><input type="text" name="name" class="name_box" placeholder="name" maxlength="12"></p>
                <p><input type="password" name="pw" class="pw_box" placeholder="password" maxlength="12">
                <div class="pw_eyes"><i id = "pw_eyes" class="fa-solid fa-eye-slash"></i></div>
                </p>
                <p><input type="password" name="pw_chk" class="pw_chk_box" placeholder="password check"></p>
                <p><button type="button" class="signup_button">Sign Up</button></p>
            </form>
            <p><button class="id_chk_btn">check</button></p>
            <p><button class="na_chk_btn">check</button></p>
            <p><button class="pw_chk_btn">check</button></p>   
        </div>
        <div class="footer_line"></div>
        <div class="footer">
            <span>Create by CHOI</span>
        </div>
    </div>
</div>
</div>
<script src="../js/signup.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>