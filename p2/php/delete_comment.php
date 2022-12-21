<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        $id = "none";
        $pw = "none";
        $name = "none";
        #echo "<script>location.replace('php/login.php');</script>";

    }else{
        $id = $_SESSION['uid']; // ID SESSION 
        $pw = $_SESSION['upw']; // PW SESSION 
        $name = $_SESSION['uname']; // NAME SESSION
    }
    $comment_id = $_GET['dcid'];
?>

<?php
    error_reporting(E_ALL); 
    ini_set('display_errors', '1'); // php error message 

    $db_host = "localhost:3306"; // db
    $db_user = "root"; // db
    $db_pw = "chldnjsgh98!"; // db
    $db_name = "games"; // db
    $mysqli = new mysqli($db_host, $db_user, $db_pw, $db_name); // db

    $crq = "SELECT * FROM c_comment WHERE ccoid LIKE '$comment_id'";
    $crresult = $mysqli->query($crq);
    $crrows = mysqli_fetch_assoc($crresult);
?>

<?php

    $return_id = $crrows['cid'];
    if($id == $crrows['uid']){
        $q = "DELETE FROM c_comment WHERE ccoid LIKE '$comment_id'";
        $result = $mysqli->query($q);
        echo "<script>location.replace('console_read.php?cid=$return_id');</script>";
    }else{
        echo "<script>alert('delete only commented ID')</script>";
        echo "<script>location.replace('console_read.php?cid=$return_id');</script>";
    }

?>
