<?php
    include_once "config.php";
    session_start();

    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($userName) && !empty($password)){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE userName = '{$userName}' AND password = '{$password}'");

        if(mysqli_num_rows($sql) > 0){
            $sql2 = mysqli_query($conn, "UPDATE users set status = 'Active now'");
            $row = mysqli_fetch_assoc($sql);
            $_SESSION['unique_id'] = $row['unique_id'];
            echo "success";
        }else{
            echo "Email or Password is incorrect !";
        }
    }else{
        echo "All input field are required !";
    }
?>