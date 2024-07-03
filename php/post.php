<?php
    include_once "config.php";
    session_start();
    $user_id = $_SESSION['unique_id']; 

    $content = mysqli_real_escape_string($conn, $_POST['content']);

    if(!empty($content)){
        $sql = mysqli_query($conn, "INSERT INTO posts (user_id, content) VALUES ($user_id,'$content')");

        echo "success";
    }else{
        echo "The content can't be null !";
    }
?>