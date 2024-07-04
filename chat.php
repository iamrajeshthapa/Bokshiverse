<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bokshiverse - Chat</title>
    <link rel="stylesheet" href="./css/chat.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    session_start();
    include_once "php/config.php";
    $user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");

    if (mysqli_num_rows($sql) > 0) {
        $row = mysqli_fetch_assoc($sql);
    }
    ?>
    <div class="container">
        <div class="nav">
            <div class="left">
                <a href="user.php"><i class="fa-solid fa-delete-left"></i></a>
                <a href="profile.php?user_id=<?php echo $user_id; ?>" style="color: white; text-decoration: none; display: flex; flex-direction: row; align-items: center; gap:10px">
                <div class="profilePicture">
                    <img src="./asset/image/profile/<?php echo $row['profilePicture']; ?>" alt="">
                </div>
                <div class="userDetail">
                    <div class="name"><?php echo $row['firstName'] . " " . $row['lastName']; ?></div>
                    <div class="status"><?php echo $row['status']; ?></div>
                </div>
                </a>
            </div>
            <div class="right">
                <a href=""><i class="fa-solid fa-phone"></i></a>
                <a href=""><i class="fa-solid fa-video"></i></a>
            </div>
        </div>
        <div class="chatArea">
            <!--API is called here-->
        </div>
        <form action="#" class="messageInputWrapper" autocomplete="off">
        <i class="fa-solid fa-microphone"></i>
        <i class="fa-solid fa-image"></i>
            <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id']; ?>" hidden>
            <input type="text" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
            <input type="text" name="message" placeholder="Enter your message here" id="message">
            <button><i class="fa-solid fa-paper-plane" id="send"></i></button>
        </form>
    </div>
    <script src="./js/chat.js"></script>
</body>

</html>