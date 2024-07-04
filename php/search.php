<?php
    session_start();
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
    $output = "";

    $sql = mysqli_query($conn, "SELECT * FROM users WHERE NOT unique_id = {$outgoing_id} AND firstName LIKE '%{$searchTerm}%' OR lastName LIKE '%{$searchTerm}%'");
    if(mysqli_num_rows($sql) > 0){
        include "data.php";
    }else{
        $output .= '<div><i class="fa-solid fa-triangle-exclamation" style="padding-right: 6px;"></i> <span>No users found related to your term !</span></div>';
    }
    echo $output;
?>