<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    session_start();
    $db_host = "localhost:3306";
    $db_user = "root";
    $db_pw = "chldnjsgh98!";
    $db_name = "games";
    $mysqli = new mysqli($db_host, $db_user, $db_pw, $db_name);

    $userid = $_POST['id'];
    $userpw = $_POST['pw'];

    $q = "SELECT * FROM user WHERE uid = '$userid' AND upw = '$userpw'";
    $result = $mysqli->query($q);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    // check login data
    if($row != null){ // if there are ID, Login
        $_SESSION['uid'] = $row['uid'];
        $_SESSION['upw'] = $row['upw'];
        $_SESSION['uname'] = $row['uname'];
        echo "<script>location.replace('../index.php')</script>";
        exit;
    }else if($row == null){ // if there are not ID, not Login 
        echo "<script>alert('Please Check ID or Password')</script>";
        echo "<script>location.replace('login.php')</script>";
        exit;
    }
?>