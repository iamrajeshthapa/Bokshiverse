<?php
    session_start();
    $user_id = $_SESSION['unique_id'];
    $outgoing_id = $_SESSION['unique_id'];
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$user_id}");
    $output = "";

    if(mysqli_num_rows($sql) == 0){
        $output .= '<div style="padding-left: 10px;"><i class="fa-solid fa-triangle-exclamation" style="padding-right: 6px;"></i> <span>No users are available to chat !</span></div>';
    }elseif(mysqli_num_rows($sql) > 0){
        include "data.php";
    }
    echo $output;
?>