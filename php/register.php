<?php
    include_once "config.php";
    session_start();

    $firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
    $userName = mysqli_real_escape_string($conn, $_POST['userName']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($firstName) && !empty($lastName) && !empty($userName) && !empty($password)){
        if($userName[0] == '@'){
            $sql = mysqli_query($conn, "SElECT * FROM users WHERE userName = '{$userName}'");
            if(mysqli_num_rows($sql) > 0){
                echo "$userName - This username already exist !";
            }else{
                if(isset($_FILES['profilePicture'])){
                    $img_name = $_FILES['profilePicture']['name'];
                    $img_type = $_FILES['profilePicture']['type'];
                    $temp_name = $_FILES['profilePicture']['tmp_name'];
                    
                    $img_explode = explode('.', $img_name);
                    $img_ext = end($img_explode);

                    $extensions = ['png', 'jpg', 'jpeg'];

                    if(in_array($img_ext, $extensions) === true){
                        $time = time();

                        $new_img_name = $time.$img_name;

                        if(move_uploaded_file($temp_name, "../asset/image/profile/".$new_img_name)){
                            $status = "Active now";

                            $random_id = rand(time(), 10000000);

                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, firstName, lastName, userName, password, profilePicture, status)
                            VALUES({$random_id}, '{$firstName}', '{$lastName}', '{$userName}', '{$password}', '{$new_img_name}', '{$status}')");

                            if($sql2){
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE userName = '{$userName}'");

                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);

                                    $_SESSION['unique_id'] = $row['unique_id'];

                                    echo "success";
                                }
                            }else{
                                echo "Something went wrong !";
                            }
                        }
                    }else{
                        echo "Please and image file - png, jpeg, jpg !";
                    }
                }else{
                    echo "Please select and profile picture !";
                }
            }
        }else{
            echo "User name must contain @ at the begining";
        }
    }else{
        echo "All input field are required !";
    }
?>