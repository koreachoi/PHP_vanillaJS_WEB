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
    $content_id = $_GET['dcid'];
?>

<?php
    error_reporting(E_ALL); 
    ini_set('display_errors', '1'); // php error message 

    $db_host = "localhost:3306"; // db
    $db_user = "root"; // db
    $db_pw = "chldnjsgh98!"; // db
    $db_name = "games"; // db
    $mysqli = new mysqli($db_host, $db_user, $db_pw, $db_name); // db
?>

<?php // delete query line
    $q = "DELETE FROM c_content WHERE cid LIKE '$content_id'";
    $result = $mysqli->query($q);
    echo "<script>location.replace('console.php');</script>";
?>