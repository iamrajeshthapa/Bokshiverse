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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-solid-rounded/css/uicons-solid-rounded.css'>
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
                    <img src="./asset/profile/image/<?php echo $row['profilePicture']; ?>" alt="">
                </div>
                <div>
                    <div id="name">
                        <div class="name-badge">
                            <div class="name"><?php echo $row['firstName'] . " " . $row['lastName']; ?></div>
                            <i class="fi fi-sr-shield-trust" id="<?php echo $row['verification_status']; ?>"></i>
                        </div>
                        <?php
                        if ($_SESSION['unique_id'] !== $user_id) {
                            echo "<div class=\"follow\">Follow</div>";
                        }
                        ?>
                    </div>
                    <div class="userName"><?php echo $row['userName']; ?></div>
                </div>
                <div class="follow-data">
                    <div class="follower"><span>0</span> follower</div>
                    <div class="follower"><span>0</span> Following</div>
                </div>
            </div>
            <div class="userPost">
                <div class="title">POST</div>
                <?php
                if (mysqli_num_rows($sql) > 0) {
                    do {
                        echo '<div class="post">
                        <div class="nav">
                        <a href="profile.php?user_id=' . $row['unique_id'] . '" style="color: white; text-decoration: none;">
                            <div class="left">
                                <div class="profilePicture">
                                    <img src="./asset/profile/image/' . $row['profilePicture'] . '"
                                        alt="">
                                </div>
                                <div class="userDetail">
                                    <div id="name">
                                      <div class="name">' . $row['firstName'] . " " . $row['lastName'] . '</div>
                                      <i class="fi fi-sr-shield-trust" id="' . $row['verification_status'] . '"></i>
                                    </div>
                                    <div class="userName">' . $row['userName'] . '</div>
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
                        <div class="content" id="' . $row['content'] . '">' . $row['content'] . '</div>
                <div class="postPicture" id="' . $row['post_picture'] . '">
                    <img src="asset/post/image/' . $row['post_picture'] . '" />
                </div>
                <div class="postVideo" id="' . $row['post_video'] . '">
                    <video controls>
                      <source src="asset/post/video/' . $row['post_video'] . '" type="video/mp4">
                    </video>
                </div>
                        <div class="interaction">
                            <div><i class="fa-regular fa-thumbs-up"></i> 0</div>
                            <div><i class="fa-regular fa-thumbs-down"></i> 0</div>
                            <div><i class="fa-regular fa-comment"></i> 0</div>
                        </div>
                    </div>';
                    } while ($row = mysqli_fetch_assoc($sql));
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
    <script>
        // Get all <video> elements.
        const videos = document.querySelectorAll('video');

        // Pause all <video> elements except for the one that started playing.
        function pauseOtherVideos({
            target
        }) {
            for (const video of videos) {
                if (video !== target) {
                    video.pause();
                }
            }
        }

        // Listen for the 'play' event on all the <video> elements.
        for (const video of videos) {
            video.addEventListener('play', pauseOtherVideos);
        }
    </script>
</body>

</html>