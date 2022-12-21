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
<?php
    $crq = "SELECT * FROM c_content";
    $crresult = $mysqli->query($crq);
    $total = mysqli_num_rows($crresult);

    $new_total = $total + 1;
    $title = $_POST['c_title'];
    $date = date('Y-m-d'); 
    $view = 0;
    $main = $_POST['c_main'];

    $caq = "INSERT INTO c_content(cid, ctitle, cdate, cview, cmain, uid) 
    VALUES('$new_total', '$title', '$date', '$view', '$main', '$id')"; // query
    $caresult = $mysqli->query($caq);
    echo "<script>location.replace('console.php');</script>"
?>