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
    <title>Bokshiverse - Home</title>
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="nav">
            <div class="logo">BOKSHI<span style="color: greenyellow;">VERSE</span> <span style="font-size: 15px; font-weight: 500;">V1.0.0</span></div>
            <div class="link">
                <a href=""><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href=""><a href=""><i class="fa-solid fa-bell"></i></a></a>
            </div>
        </div>
        <div class="feed">
            <!--API is called here-->
        </div>
        <div class="footer">
            <div class="link">
                <a href="home.php" style="color: greenyellow;"><i class="fa-solid fa-house"></i></a>
                <a href="user.php"><i class="fa-solid fa-message"></i></a>
                <a href="post.php"><i class="fa-solid fa-plus"></i></a>
                <a href="profile.php?user_id=<?php echo $_SESSION['unique_id']; ?>"><i class="fa-solid fa-user"></i></a>
                <a href="setting.php"><i class="fa-solid fa-gear"></i></a>
            </div>
        </div>
    </div>
    <script src="./js/get-post.js"></script>
</body>
</html>