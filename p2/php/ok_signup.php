<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    session_start();
    $db_host = "localhost:3306";
    $db_user = "root";
    $db_pw = "chldnjsgh98!";
    $db_name = "games";
    $mysqli = new mysqli($db_host, $db_user, $db_pw, $db_name);

    $formated_DATE = date('Y-m-d'); // DATE
    
    $userid = $_POST['id'];
    $username = $_POST['name'];
    $userpw = $_POST['pw'];
    $userdate = $formated_DATE;

    $q = "INSERT INTO user(uid, uname, upw, udate) 
    VALUES('$userid', '$username', '$userpw', '$userdate')";
    $result = $mysqli->query($q);
    
    if($result == true){
        echo "<script>alert('Create Account')</script>";
        echo "<script>location.replace('login.php')</script>";
        exit;
    }else if($result == false){
        echo "<script>alert('Error!')</script>";
        echo "<script>location.replace('signup.php')</script>";
        exit;
    }
?>