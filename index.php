<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        header("location: home.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bokshiverse - Register</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="nav">REGISTER</div>
        <div>
            <div class="greeting">Hi, Welcome to Bokshiverse</div>
            <div class="request">Please register your account to continue !</div>
        </div>
        <div class="error"></div>
        <form action="#" enctype="multipart/form-data">
            <div class="name">
                <input type="text" placeholder="First Name" name="firstName" required>
                <input type="text" placeholder="Last Name" name="lastName" required>
            </div>
            <input type="text" placeholder="User Name - ex. @lordRajesh" name="userName" required>
            <div class="eyeWrapper">
                <input type="password" placeholder="Password" name="password" id="password" required>
                <i class="fa-solid fa-eye" id="eye"></i>
            </div>
            <input type="file" name="profilePicture" id="profilePictureInput" hidden>
            <div class="profilePicture">
                <div>
                    <i class="fa-solid fa-folder"></i>
                </div>
                <div class="folderClick">Choose your Profile picture</div>
            </div>
            <input type="submit" value="REGISTER" id="submit">
        </form>
        <div class="oldUser">
            <p>Already have Account ?</p>
            <a href="login.php">Login now</a>
        </div>
    </div>
    <script src="./js/passwordToggle.js"></script>
    <script src="./js/register.js"></script>
</body>
</html>