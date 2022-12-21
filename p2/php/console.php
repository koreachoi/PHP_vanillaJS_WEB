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

    $q = "SELECT * FROM c_content ORDER BY 'cid' DESC"; // search sorting console_content 
    $result = $mysqli->query($q);
    $total = mysqli_num_rows($result);
?>

<?php // sorting content number
    $sq = "SELECT * FROM c_content"; // counting content
    $sresult = $mysqli->query($sq); 
    $total_content = mysqli_num_rows($sresult);
    $c = 1; // input number variable 
    while($srows = mysqli_fetch_array($sresult)){ // set update while line 
        $content_number = $srows['cid']; // check numnber 
        $eq = "UPDATE c_content SET cid = '$c' WHERE cid LIKE '$content_number'"; // update line 
        $eqresult = $mysqli->query($eq); // update 
        $c++; // variable update
    }
?>

<?php
    $list_num = 10; // page count 
    $page_num = 5; // block count
    $page = isset($_GET["page"])? $_GET["page"] : 1; // current page
    $total_page = ceil($total / $list_num); // all page
    $total_block = ceil($total_page / $page_num); // all block 
    $now_block = ceil($page / $page_num); // current block number
    $s_pageNum = ($now_block - 1) * $page_num + 1; // start page number 
    if($s_pageNum <= 0){ // data 0
        $s_pageNum = 1;
    }
    $e_pageNum = $now_block * $page_num; // end page number
    if($e_pageNum > $total_page){ // 
        $e_pageNum = $total_page;
    }

    $start = ($page - 1) * $list_num;

    $q = "SELECT * FROM c_content ORDER BY cid desc limit $start, $list_num";
    $result = $mysqli->query($q);

    $cnt = $start + 1;
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/f714f8ef10.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/console_style.css">
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
        <div class="content_layout">
            <div class="head_text">Community</div>
            <table class="table_all">
            <tr class="thead"> <!-- tables -->
            <th width='50px'>Number</th>
            <th width='500px'>Title</th>
            <th width='50px'>Comment</th>
            <th width='150px'>User</th>
            <th width='150px'>Date</th>
            <th width='100px'>View</th>
            </tr>
            <?php // Read console's datas 
                while($rows = mysqli_fetch_array($result)){
                    ?>
                    <tr class="tbody">
                    <td width='100px' height='40px'><?php echo $rows['cid'];?></td>
                    <td width='500px'>
                        <a class ="ctitle" href="console_read.php?cid=<?php echo $rows['cid'];?>">
                            <?php echo $rows['ctitle'];?>
                        </a>
                    </td>
                    <td>
                        <?php
                            $content_id = $rows['cid'];
                            $dcq = "SELECT * FROM c_comment WHERE cid LIKE '$content_id'"; // search sorting console_content 
                            $dcresult = $mysqli->query($dcq);
                            $dctotal = mysqli_num_rows($dcresult);
                            echo $dctotal;
                        ?>
                    </td>
                    <td width='150px'><?php echo $rows['uid'];?></td>
                    <td width='150px'><?php echo $rows['cdate'];?></td>
                    <td width='100px'><?php echo $rows['cview'];?></td>
                    </tr>
                    <?php
                }
            ?>
            </table>
        </div>
        <div class="pager">
            <div class="pager_pre_box">
                <!-- Previous page -->
                <?php
                    if($page <=1 ){?> <!-- if page's number equal 1 or less than 1 -->
                        <a href="console.php?page=1"></a><?php // replace link
                    }else{?> <!-- or case -->
                        <a class="pager_pre" href="console.php?page=<?php echo ($page-1);?>"> Previous </a>
                        <?php 
                    }
                ?>
            </div>
            <!-- Page -->
            <div class="pager_box">
            <?php
                /* pager : print page number */
                for($print_page = $s_pageNum; $print_page <= $e_pageNum; $print_page++){?> 
                    <a class="pager" href="console.php?page=<?php echo $print_page; ?>"><?php 
                    if($print_page == $page){
                        echo "<span style='color:white;'>$print_page</spn>"; 
                    }else{
                        echo $print_page;
                    } ?></a><?php
                }
            ?>
            </div>
            <div class="pager_nex_box">
                <!-- Next page -->
                <?php
                    /* paging : Next pages*/
                    if($page >= $total_page){?>
                        <a class="pager" href="console.php?page=<?php echo $total_page; ?>"></a><?php 
                    }else{ ?>
                        <a class="pager" href="console.php?page=<?php echo ($page+1); ?>"> Next </a><?php 
                    };
                ?>
            </div>
        </div>
        <input type="hidden" class="id_value" value="<?php echo $id ?>"/>
        <div class="create_post_box">
            <form>
                <input type="button" class="new_post_btn" value="New Post"/>
            </form>
        </div>
        <div class="total_content">Total : <?php echo $total ?></div>
        <div class="search_box">
            <form method="post" action="search_console.php" class="search_form">
                <select name="s_case" class="search_case">
                    <option value="id">id</option>
                    <option value="title">title</option>
                </select>
                <input type="search" name="s_name" class="search_name">
                <input type="button" value="search" class="search_btn"/>
            <form>
        </div>
        <div class="footer_line"></div>
        <div class="footer">
            <span>Create by CHOI</span>
        </div>
    </div>
</div>
</div>
<script src="../js/console.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>