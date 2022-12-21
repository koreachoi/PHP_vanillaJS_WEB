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
?>
<?php
    error_reporting(E_ALL); 
    ini_set('display_errors', '1'); // php error message 

    $db_host = "localhost:3306"; // db
    $db_user = "root"; // db
    $db_pw = "chldnjsgh98!"; // db
    $db_name = "games"; // db
    $mysqli = new mysqli($db_host, $db_user, $db_pw, $db_name); // db

    if(isset($_GET['cid'])){ // GET ID
        $cid = $_GET['cid']; // cosole's content id
    }
    // data length
    // content length
    $lq = "SELECT * FROM c_content ORDER BY 'c_id' desc";
    $lresult = $mysqli->query($lq);
    $total = mysqli_num_rows($lresult);
    // comment length
    $lq2 = "SELECT * FROM c_comment WHERE cid LIKE '$cid'";
    $lresult2 = $mysqli->query($lq2);
    $total2 = mysqli_num_rows($lresult2);

    // content data
    $q = "SELECT * FROM c_content WHERE cid LIKE '$cid'";
    $result = $mysqli->query($q);
    $rows = mysqli_fetch_assoc($result);

    // view update
    $uq = "UPDATE c_content SET cview = cview + 1 WHERE cid LIKE '$cid'";
    $u_result = $mysqli->query($uq);

    // add comment
    $clq = "SELECT * FROM c_comment ORDER BY 'ccoid' desc";
    $clresult = $mysqli->query($clq);
    $ctotal = mysqli_num_rows($clresult);
    $new_ctotal = $ctotal + 1;

    $comment_DATE = date('Y-m-d'); // DATE
    // $cid // content id
    // $id  // user id
    if(!$_POST){ // case : not have $_POST value

    }else{ // case : have $_POST value 
        $comment_main = $_POST['comment']; // Insert $_POST value To DB
        $caq = "INSERT INTO c_comment(ccoid, ccodate, ccomain, cid, uid) 
        VALUES('$new_ctotal', '$comment_DATE', '$comment_main', '$cid', '$id')"; // query
        $caresult = $mysqli->query($caq);
        echo "<script>location.replace('console_read.php?cid=$cid')</script>"; // reset $_POST value
    }
    // read comment
    $crq = "SELECT * FROM c_comment WHERE cid LIKE '$cid' ORDER BY ccoid desc";
    $crresult = $mysqli->query($crq);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/f714f8ef10.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/console_read_style.css">
    <title>Document</title>
</head>
<body>
<div class="content">
<!--********************************* header content *********************************-->
    <div class="header">
        <div class="sub_header">
            <div class="logo">Community</div>
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
            <div class="POST">POST</div>
            <a href="edit_console_post.php?ecid=<?php echo $cid ?>" class="edit_post">edit</a>
            <a href="delete_console_post.php?dcid=<?php echo $cid ?>" class="delete_post">delete</a>
            <form class="previous_or_next">
                <input type="hidden" class="SESSION_ID" value="<?php echo $id; ?>">
                <input type="hidden" class="POST_ID" value="<?php echo $rows['uid'];?>">
                <input type="hidden" class="current_num" value="<?php echo $cid?>">
                <input type="hidden" class="total_num" value="<?php echo $total?>">
            </form>
            <div class="back_previous">Previous</div>
            <a class="back_list" href="console.php">List</a>
            <div class="back_next">Next</div>
            <div class="read_area"> <!-- read console_content value -->
                <div class="content_title"><?php echo $rows['ctitle'];?></div>
                <div class="content_user_date"><?php echo $rows['uid']; echo " "; echo $rows['cdate'];?></div>
                <div class="content_view">View : <?php echo $rows['cview']?></div>
                <div class="content_line"></div>
                <pre class="content_main"><?php echo $rows['cmain'];?></pre>
                <div class="comment_input_line"></div>
                <div class="comment_line"></div>
            </div>
            <?php
                include 'add_comment.php';
            ?>
            <form>
                <input type="hidden" class="total_comment" value="<?php echo $total2?>">
            </form>
            
            <div class="comment_area">
                <?php
                    while($crrows = mysqli_fetch_array($crresult)){
                        ?>
                        <table>
                            <tr>
                                <td class="comment_user_id" width="150px"><?php echo $crrows['uid']; echo " : "; ?></td>
                                <td class="comment_user_main" width="700px"><?php echo $crrows['ccomain']; ?></td>
                                <td class="comment_user_date" width="90px"><?php echo $crrows['ccodate']; ?></td>
                                <td>
                                    <div class="comment_delete" id="<?php echo $crrows['ccoid'];?>" width="10px">
                                        X
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <?php
                    }
                ?>
            </div>
            <div class="footer_line"></div>
            <div class="footer">
                <span>Create by CHOI</span>
            </div>
        </div>
    </div>
</div>
<script src="../js/console_read.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>