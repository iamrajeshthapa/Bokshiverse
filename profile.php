<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bokshiverse - Profile</title>
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include_once "php/config.php";
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $sql = mysqli_query($conn, "SELECT * FROM users LEFT JOIN posts ON users.unique_id = posts.user_id WHERE unique_id = '$user_id' ORDER BY post_id DESC");

    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
    }
    ?>
    <div class="container">
        <div class="nav">
            <div class="logo">PROFILE</div>
        </div>
        <div class="wrapper">
            <div class="userInfo">
                <div class="profilePicture">
                    <img src="./asset/image/profile/<?php echo $row['profilePicture']; ?>" alt="">
                </div>
                <div>
                    <div class="name"><?php echo $row['firstName'] . " " . $row['lastName']; ?></div>
                    <div class="userName"><?php echo $row['userName']; ?></div>
                </div>
                <div class="follow">
                    <div class="follower"><span>69k</span> follower</div>
                    <div class="follower"><span>0</span> Following</div>
                </div>
            </div>
            <div class="userPost">
                <div class="title">POST</div>
                <?php
                if (mysqli_num_rows($sql) > 0) {
                    do{
                        echo '<div class="post">
                        <div class="nav">
                        <a href="profile.php?user_id='. $row['unique_id'] .'" style="color: white; text-decoration: none;">
                            <div class="left">
                                <div class="profilePicture">
                                    <img src="./asset/image/profile/'. $row['profilePicture'] .'"
                                        alt="">
                                </div>
                                <div class="userDetail">
                                    <div class="name">'. $row['firstName'] . " " . $row['lastName'] .'</div>
                                    <div class="userName">'. $row['userName'] .'</div>
                                </div>
                            </div>
                        </a>
                            <div class="right">
                                <div class="time">5h</div>
                                <div class="more">
                                    <i class="fa-solid fa-ellipsis-vertical"></i>
                                </div>
                            </div>
                        </div>
                        <div class="content">'. $row['content'] .'</div>
                        <div class="interaction">
                            <i class="fa-regular fa-thumbs-up"></i>
                            <i class="fa-regular fa-comment"></i>
                            <i class="fa-solid fa-share"></i>
                        </div>
                    </div>';
                    }while ($row = mysqli_fetch_assoc($sql));
                }
                ?>
            </div>
        </div>
        <div class="footer">
            <div class="link">
                <a href="home.php"><i class="fa-solid fa-house"></i></a>
                <a href="user.php"><i class="fa-solid fa-message"></i></a>
                <a href="post.php"><i class="fa-solid fa-plus"></i></a>
                <a href="profile.php?user_id=<?php echo $_SESSION['unique_id']; ?>" style="color: greenyellow;"><i class="fa-solid fa-user"></i></a>
                <a href="setting.php"><i class="fa-solid fa-gear"></i></a>
            </div>
        </div>
    </div>
</body>

</html>