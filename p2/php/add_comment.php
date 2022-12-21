<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/add_comment_style.css">
</head>
<body>
    <!-- Add Comment -->
    <div class="comment_input_area">
        <form class="comment_input" method ="post" action="console_read.php?cid=<?php echo $cid ?>">
            <input type="hidden" class="id_value" value="<?php echo $id ?>"/>
            <div class="user_id"><?php echo $id ?></div>
            <div class="login_comment">Comment Need Login</div>
            <textarea wrap="on" maxlength = "500" class="input_comment" name="comment"></textarea>
            <input type="button" class="comment_input_btn" value="Enter"/>
        </form>
    </div>
</body>
<script src="../js/add_comment.js"></script>
</html>
