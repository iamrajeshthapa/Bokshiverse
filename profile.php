<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="nav">
            <div class="logo">PROFILE</div>
        </div>
        <div class="wrapper">
            <div class="userInfo">
                <div class="profilePicture">
                    <img src="./asset/image/profile/ghost-call-of-duty-modern-warfare-ii-thumb-728x410.jpg" alt="">
                </div>
                <div>
                    <div class="name">Rajesh Thapa</div>
                    <div class="userName">@rajesthapa</div>
                </div>
                <div class="follow">
                    <div class="follower"><span>11k</span> follower</div>
                    <div class="follower"><span>11k</span> Following</div>
                </div>
            </div>
            <div class="userPost">
                <div class="title">POST</div>
                <div class="post">
                    <div class="nav">
                        <div class="left">
                            <div class="profilePicture">
                                <img src="./asset/image/profile/ghost-call-of-duty-modern-warfare-ii-thumb-728x410.jpg"
                                    alt="">
                            </div>
                            <div class="userDetail">
                                <div class="name">Rajesh Thapa</div>
                                <div class="userName">@rajeshthapa</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="time">5h</div>
                            <div class="more">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content">If someone throw you a rock, dont throw them back. Collect them and build an
                        empire.</div>
                    <div class="interaction">
                        <i class="fa-regular fa-thumbs-up"></i>
                        <i class="fa-regular fa-comment"></i>
                        <i class="fa-solid fa-share"></i>
                    </div>
                </div>
                <div class="post">
                    <div class="nav">
                        <div class="left">
                            <div class="profilePicture">
                                <img src="./asset/image/profile/ghost-call-of-duty-modern-warfare-ii-thumb-728x410.jpg"
                                    alt="">
                            </div>
                            <div class="userDetail">
                                <div class="name">Rajesh Thapa</div>
                                <div class="userName">@rajeshthapa</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="time">5h</div>
                            <div class="more">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content">If someone throw you a rock, dont throw them back. Collect them and build an
                        empire.</div>
                    <div class="interaction">
                        <i class="fa-regular fa-thumbs-up"></i>
                        <i class="fa-regular fa-comment"></i>
                        <i class="fa-solid fa-share"></i>
                    </div>
                </div>
                <div class="post">
                    <div class="nav">
                        <div class="left">
                            <div class="profilePicture">
                                <img src="./asset/image/profile/ghost-call-of-duty-modern-warfare-ii-thumb-728x410.jpg"
                                    alt="">
                            </div>
                            <div class="userDetail">
                                <div class="name">Rajesh Thapa</div>
                                <div class="userName">@rajeshthapa</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="time">5h</div>
                            <div class="more">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content">If someone throw you a rock, dont throw them back. Collect them and build an
                        empire.</div>
                    <div class="interaction">
                        <i class="fa-regular fa-thumbs-up"></i>
                        <i class="fa-regular fa-comment"></i>
                        <i class="fa-solid fa-share"></i>
                    </div>
                </div>
                <div class="post">
                    <div class="nav">
                        <div class="left">
                            <div class="profilePicture">
                                <img src="./asset/image/profile/ghost-call-of-duty-modern-warfare-ii-thumb-728x410.jpg"
                                    alt="">
                            </div>
                            <div class="userDetail">
                                <div class="name">Rajesh Thapa</div>
                                <div class="userName">@rajeshthapa</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="time">5h</div>
                            <div class="more">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content">If someone throw you a rock, dont throw them back. Collect them and build an
                        empire.</div>
                    <div class="interaction">
                        <i class="fa-regular fa-thumbs-up"></i>
                        <i class="fa-regular fa-comment"></i>
                        <i class="fa-solid fa-share"></i>
                    </div>
                </div>
                <div class="post">
                    <div class="nav">
                        <div class="left">
                            <div class="profilePicture">
                                <img src="./asset/image/profile/ghost-call-of-duty-modern-warfare-ii-thumb-728x410.jpg"
                                    alt="">
                            </div>
                            <div class="userDetail">
                                <div class="name">Rajesh Thapa</div>
                                <div class="userName">@rajeshthapa</div>
                            </div>
                        </div>
                        <div class="right">
                            <div class="time">5h</div>
                            <div class="more">
                                <i class="fa-solid fa-ellipsis-vertical"></i>
                            </div>
                        </div>
                    </div>
                    <div class="content">If someone throw you a rock, dont throw them back. Collect them and build an
                        empire.</div>
                    <div class="interaction">
                        <i class="fa-regular fa-thumbs-up"></i>
                        <i class="fa-regular fa-comment"></i>
                        <i class="fa-solid fa-share"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="link">
                <a href="home.php"><i class="fa-solid fa-house"></i></a>
                <a href="user.php"><i class="fa-solid fa-message"></i></a>
                <a href=""><i class="fa-solid fa-plus"></i></a>
                <a href="profile.php" style="color: greenyellow;"><i class="fa-solid fa-user"></i></a>
                <a href="setting.php"><i class="fa-solid fa-gear"></i></a>
            </div>
        </div>
    </div>
</body>

</html>