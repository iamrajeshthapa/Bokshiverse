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
    <title>Bokshiverse - Setting</title>
    <link rel="stylesheet" href="./css/setting.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-solid-rounded/css/uicons-solid-rounded.css'>

</head>

<body>
    <div class="container">
        <div class="nav">
            <div class="logo">SETTING</div>
        </div>
        <div class="wrapper">
            <div>
                <a href="./static/account.html"><i class="fa-solid fa-address-card"></i>Account Information</a>
            </div>
            <div>
                <a href="php/verification.php"><i class="fi fi-sr-shield-trust"></i>Get verified</a>
            </div>
            <div>
                <a href="./static/help-support.html"><i class="fa-solid fa-hand-holding-medical"></i>Help and Support</a>
            </div>
            <div>
                <a href="./static/theme.html"><i class="fa-solid fa-moon"></i>Theme</a>
            </div>
            <div>
                <a href="./static/report-bug.html"><i class="fa-solid fa-bug"></i>Report a Bug</a>
            </div>
            <div>
                <a href="./static/about.html"><i class="fa-solid fa-book"></i>About</a>
            </div>
            <div>
                <a href="./static/privacy-policy.html"><i class="fa-solid fa-circle-question"></i>Privacy and Policy</a>
            </div>
            <div>
                <a href="./static/privacy-policy.html"><i class="fa-solid fa-scroll"></i>Terms and Condition</a>
            </div>
            <div>
                <a href="./static/cookie-session.html"><i class="fa-solid fa-cookie"></i>Cookies and Session Policy</a>
            </div>
            <div>
                <a href="./static/contact.html"><i class="fa-solid fa-envelope"></i>Contact</a>
            </div>
            <div>
                <a href="php/logout.php?logout_id=<?php echo $_SESSION['unique_id'] ?>"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
            </div>
        </div>
        <div class="footer">
            <div class="link">
                <a href="home.php"><i class="fa-solid fa-house"></i></a>
                <a href="user.php"><i class="fa-solid fa-message"></i></a>
                <a href="post.php"><i class="fa-solid fa-plus"></i></a>
                <a href="profile.php?user_id=<?php echo $_SESSION['unique_id']; ?>"><i class="fa-solid fa-user"></i></a>
                <a href="setting.php" style="color: greenyellow;"><i class="fa-solid fa-gear"></i></a>
            </div>
        </div>
    </div>
</body>

</html>