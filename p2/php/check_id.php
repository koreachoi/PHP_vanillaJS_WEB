<?php
    $db_host = "localhost:3306";
    $db_user = "root";
    $db_pw = "chldnjsgh98!";
    $db_name = "games";
    $mysqli = new mysqli($db_host, $db_user, $db_pw, $db_name);

    $uid= $_GET["userid"];  
    $q= "SELECT * FROM user where uid='$uid'";
    $result = mysqli_fetch_array(mysqli_query($mysqli, $q));
?>
<!-- Check Id -->
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/check_id_style.css">
    </head>
    <body>
        <div class="main">
            <?php
            if(!$result){
                ?><div class="use_id"><?php echo "<span style='color:green;'>$uid</span>" ?> is available</div>
                <button class="ok_btn">OK</button>
                <script src="../js/check_ok_id.js"></script>
                <?php
            }else{
                ?><div class="nuse_id"><?php echo "<span style='color:red;'>$uid</span>" ?> has already been used</div>
                <button class="close_btn">CLOSE</button>
                <script src="../js/check_close_id.js"></script>
                <?php
            }
            ?>
        </div>
    </body>
</html>



