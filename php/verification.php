<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="verification.php" method="POST">
        <input type="text" name="code" placeholder="Enter the verification code here">
        <br>
        <br>
        <input type="submit" value="Submit" name="submit">
    </form>
    <p>Dont have verification code ? Contact <a href="https://x.com/devRajeshThapa">Rajesh Thapa</a></p>
    <?php
    include_once "config.php";
    session_start();

    $user_id = $_SESSION['unique_id'];

    if(!isset($_SESSION['unique_id'])){
        header("location: ../login.php");
    }else{
        if(isset($_POST['submit'])){
            $verification_code = "XhFsgO53do";
            $code = $_POST['code'];

            if($verification_code == $code){
                $sql = mysqli_query($conn, "UPDATE users set verification_status = 'verified' WHERE unique_id = '$user_id'");
                echo "You are now verified member of Bokshiverse !";
            }else{
                echo "Verification code did not matched !";
            }
        }
    }
    ?>
</body>
</html>