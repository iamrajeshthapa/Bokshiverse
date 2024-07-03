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
    <title>Bokshiverse - Login</title>
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="nav">LOGIN</div>
        <div>
            <div class="greeting">Hi, Welcome back to Bokshiverse</div>
            <div class="request">Please login your account to continue !</div>
        </div>
        <div class="error"></div>
        <form action="#">
            <input type="text" placeholder="User Name - ex. @lordRajesh" name="userName" required>
            <div class="eyeWrapper">
                <input type="password" placeholder="Password" name="password" id="password" required>
                <i class="fa-solid fa-eye" id="eye"></i>
            </div>
            <input type="submit" value="LOGIN" id="submit">
        </form>
        <div class="forgotPassword">Forgot password ?</div>
        <div class="oldUser">
            <p>Don't have account ?</p>
            <a href="index.php">Register now</a>
        </div>

    </div>
    <script src="./js/passwordToggle.js"></script>
    <script src="./js/login.js"></script>
</body>

</html>