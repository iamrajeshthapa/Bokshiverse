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
    <title>Bokshiverse - User</title>
    <link rel="stylesheet" href="./css/user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-solid-rounded/css/uicons-solid-rounded.css'>
</head>

<body>
    <div class="container">
        <div class="nav">
            <div class="logo">CHAT</div>
        </div>
        <div class="search">
            <input type="text" placeholder="Enter the name of the user" id="search">
        </div>
        <div class="userList" id="userLIst">
            <!--API called here-->
        </div>
        <div class="footer">
            <div class="link">
                <a href="home.php"><i class="fa-solid fa-house"></i></a>
                <a href="user.php" style="color: greenyellow;"><i class="fa-solid fa-message"></i></a>
                <a href="post.php"><i class="fa-solid fa-plus"></i></a>
                <a href="profile.php?user_id=<?php echo $_SESSION['unique_id']; ?>"><i class="fa-solid fa-user"></i></a>
                <a href="setting.php"><i class="fa-solid fa-gear"></i></a>
            </div>
        </div>
    </div>
    <script src="./js/user.js"></script>
</body>

</html>