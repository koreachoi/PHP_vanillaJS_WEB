<?php
    session_start();
    if(!isset($_SESSION['uid'])){
        $id = "none";
        $pw = "none";
        $name = "none";
        #echo "<script>location.replace('php/login.php');</script>";

    }else{
        $id = $_SESSION['uid'];
        $pw = $_SESSION['upw'];
        $name = $_SESSION['uname'];
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://kit.fontawesome.com/f714f8ef10.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="content">
<!--********************************* header content *********************************-->
        <div class="header">
            <div class="sub_header">
                <div class="logo">Game Talk</div>
                <div class="header_menu"><a href="index.php">Home</a></div>
                <div class="header_type_menu"><a href="php/console.php">Community</a></div>
                <div class="header_community_menu"><a href="php/rank/rank.php">Rank</a></div>
                <div class="header_menu"><a href="php/support.php">Support</a></div>
                <div class="sign_up_menu"><a href="php/signup.php">Sign up</a></div>
                <?php
                    if($id == "none"){
                        ?><div class="log_in_menu"><a href="php/login.php">Log In</a></div><?php
                    }else if($id != "none"){
                        ?><div class="log_out_menu"><a href="php/logout.php">Log out</a></div><?php
                    }
                ?>
            </div>
        </div>
<!--********************************* Main content *********************************-->
        <div class="main">
            <div class="sub_main">
<!--********************************* New or Best Main content *********************************-->
                <div class="u_data_box">
                    <div class="u_data">
                        ID : <?php echo $id;?>
                        <br>
                        Name : <?php echo $name;?>
                    </div>
                </div>
                <div class="new_best">
                    <div class="new_best_button">
                        <div class="new_button">
                            <div class="new_button_content">
                                <span>NEW</span>
                            </div>
                        </div>
                        <div class="best_button">
                            <div class="best_button_content">
                                <span>BEST</span>
                            </div>
                        </div>
                    </div>
                    <div class="new_best_content">
                        <div class="best_games" id="bg1">
                            <div class="best_games_content" id="bg1">
                                <span id="bg1">V RISING</span>
                            </div>
                        </div>
                        <div class="best_games" id="bg2">
                            <div class="best_games_content" id="bg2">
                                <span id="bg2">READY or NOT</span>
                            </div>
                        </div>
                        <div class="best_games" id="bg3">
                            <div class="best_games_content" id="bg3">
                                <span id="bg3">GTA5</span>
                            </div>
                        </div>
                        <div class="best_games" id="bg4">
                            <div class="best_games_content" id="bg4">
                                <span id="bg4">FIFA22</span>
                            </div>
                        </div>
                        <div class="best_games" id="bg5">
                            <div class="best_games_content" id="bg5">
                                <span id="bg5">CIVILIZATION VI</span>
                            </div>
                        </div>
                        <div class="best_games" id="bg6">
                            <div class="best_games_content" id="bg6">
                                <span id="bg6">ELDEN RING</span>
                            </div>
                        </div>
                        <div class="new_games" id="ng1">
                            <div class="new_games_content" id="ng1">
                                <span id="ng1">STRAY</span>
                            </div>
                        </div>
                        <div class="new_games" id="ng2">
                            <div class="new_games_content" id="ng2">
                                <span id="ng2">THE DAY BEFORE</span>
                            </div>
                        </div>
                        <div class="new_games" id="ng3">
                            <div class="new_games_content" id="ng3">
                                <span id="ng3">Hollow Knight : Silksong</span>
                            </div>                     
                        </div>
                        <div class="new_games" id="ng4">
                            <div class="new_games_content" id="ng4">
                                <span id="ng4">STALKER2</span>
                            </div>
                        </div>
                        <div class="new_games" id="ng5">
                            <div class="new_games_content" id="ng5">
                                <span id="ng5">FROST FUNK2</span>
                            </div>
                        </div>
                        <div class="new_games" id="ng6">
                            <div class="new_games_content" id="ng6">
                                <span id="ng6">Party Animals</span>
                            </div>
                        </div>
                    </div>
                    <div class="new_best_photo_area">
                        <div class="new_best_photo_1">
                            <div class ="img_area_1">
                                <img class ="img1" src="img/b1.png" width="100%" height="100%"/>
                            </div>
                            <div class="new_best_photo_tag_1">
                                <span id="new_best_game_name_1"></span>
                            </div>
                        </div>
                        <div class="new_best_photo_2">
                            <div class="img_area_2">
                                <img class ="img2" src="img/b4.jpeg" width="100%" height="100%"/>
                            </div>
                            <div class="new_best_photo_tag_2">
                                <span id="new_best_game_name_2"></span>
                            </div>
                        </div>   
                    </div>
                </div>
<!--********************************* Video Main content *********************************-->       
                <div class="video_area">
                    <div class="video_area_header">
                    </div>
                    <div vlass="video_area_main">
                        <iframe width="1000" height="562" src="https://www.youtube.com/embed/E3Huy2cdih0?autoplay=1&mute=1&loop=1&controls=0" 
                        title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; 
                        clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    </div>
                    <div class="video_area_footer">
                    </div>
                </div>
<!--********************************* First Main content *********************************-->
                <div class="first">
                    <div class="first_child">
                        <div class="first_child_content">
                            <span>Console</span>
                        </div>
                        <div class="first_child_open">
                            <i class="fa-solid fa-angles-right fa-3x"></i>
                        </div>
                    </div>
                    <div class="first_content">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/c1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/c2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/c3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/c4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/c5.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--********************************* Second Main content *********************************-->
                <div class="second">
                    <div class="second_child">
                        <div class="second_child_content">
                            <span>Online</span>
                        </div>
                        <div class="second_child_open">
                            <i class="fa-solid fa-angles-left fa-3x"></i>
                        </div>
                    </div>
                    <div class="second_content">
                        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                                <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/o1.jpeg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/o2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/o3.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/o4.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/o5.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--********************************* Third Main content *********************************-->
                <div class="third">
                    <div class="third_child">
                        <div class="third_child_content">
                            <span>Mobile</span>
                        </div>
                        <div class="third_child_open">
                            <i class="fa-solid fa-angles-right fa-3x"></i>
                        </div>
                    </div>
                    <div class="third_content">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="img/m1.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src=img/m2.jpg class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src=img/m3.jpg class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src=img/m4.jpg class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src=img/m5.png class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </button>
                          </div>
                    </div>
                </div>
<!--********************************* Card Main content *********************************-->
                <div class="card_area">
                    <div class="first_card">
                        <div class="card_1">
                            <img src="img/l1.jpeg" class="card_img1" width="300px" height="169px">
                            <div class="card_body_1">
                                <p class="card_text_1">PlayStation</p>
                            </div>
                        </div>
                        <div class="first_card_body">
                            <span id="first_card_text">Play</span>
                        </div>
                    </div>
                    <div class="second_card">
                        <div class="card_2">
                            <img src="img/l2.jpeg" class="card_img2" width="300px" height="169px">
                            <div class="card_body_2">
                              <p class="card_text_2">Nintendo Switch</p>
                            </div>
                        </div>
                        <div class="second_card_body">
                            <span id="second_card_text">With</span>
                        </div>
                    </div>
                    <div class="third_card">
                        <div class="card_3">
                            <img src="img/l3.png" class="card_img3" width="300px" height="169px">
                            <div class="card_body_3">
                              <p class="card_text_3">X Box</p>
                            </div>
                        </div>
                        <div class="third_card_body">
                            <span id="third_card_text">Me</span>
                        </div>
                    </div>
                </div>
                <div class="game_platform">
                    <div class="platform_text">
                        <span id="platform_open">OPEN</span>
                    </div>
                </div>
                <div class="footer_line">
                
                </div>
                <div class="footer">
                    <span>Create by CHOI</span>
                </div>
            </div>
        </div>
    </div>
    <script src="js/index_hover.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>