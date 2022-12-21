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

    $content_id = $_GET['ecid'];
?>
<?php
    $title = $_POST['c_title'];
    $main = $_POST['c_main'];
    echo $title;
    echo $main;

    $eq = "UPDATE c_content 
    SET ctitle = '$title', cmain = '$main' WHERE cid LIKE '$content_id'";
    $eqresult = $mysqli->query($eq);
    echo "<script>alert('EDIT SUCCESS');</script>";
    echo "<script>location.replace('console.php');</script>"

?>