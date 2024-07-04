<?php
include_once "config.php";
session_start();
$user_id = $_SESSION['unique_id'];

$content = mysqli_real_escape_string($conn, $_POST['content']);

if (empty($_FILES['postMedia']['name'])) {
    if (empty($content)) {
        echo "The content can't be empty !";
    } else {
        $sql = mysqli_query($conn, "INSERT INTO posts (user_id, content, post_picture, post_video) VALUES ($user_id,'$content', 'NULL', 'NULL')");
        echo "success";
    }
} else {
    if (empty($content)) {
        $media_name = $_FILES['postMedia']['name'];
        $media_type = $_FILES['postMedia']['type'];
        $temp_name = $_FILES['postMedia']['tmp_name'];

        $media_explode = explode('.', $media_name);
        $media_ext = end($media_explode);

        $extensionsPicture = ['png', 'jpg', 'jpeg'];
        $extensionsVideo = ['mp4'];

        if (in_array($media_ext, $extensionsPicture) === true) {
            $time = time();
            $new_picture_name = $time . $media_name;

            if (move_uploaded_file($temp_name, "../asset/post/image/" . $new_picture_name)) {

                $sql2 = mysqli_query($conn, "INSERT INTO posts (user_id, content, post_picture, post_video) VALUES ($user_id,'NULL', '$new_picture_name', 'NULL')");
            }
        }elseif(in_array($media_ext, $extensionsVideo) === true){
            $time = time();
            $new_video_name = $time . $media_name;

            if (move_uploaded_file($temp_name, "../asset/post/video/" . $new_video_name)) {
                $sql2 = mysqli_query($conn, "INSERT INTO posts (user_id, content, post_picture, post_video) VALUES ($user_id,'NULL', 'NULL', '$new_video_name')");
            }
        }else{
            echo "Please select media file - png, jpeg, jpg, mp4 !";
        }
    }else{
        $media_name = $_FILES['postMedia']['name'];
        $media_type = $_FILES['postMedia']['type'];
        $temp_name = $_FILES['postMedia']['tmp_name'];

        $media_explode = explode('.', $media_name);
        $media_ext = end($media_explode);

        $extensionsPicture = ['png', 'jpg', 'jpeg'];
        $extensionsVideo = ['mp4'];

        if (in_array($media_ext, $extensionsPicture) === true) {
            $time = time();
            $new_picture_name = $time . $media_name;

            if (move_uploaded_file($temp_name, "../asset/post/image/" . $new_picture_name)) {

                $sql2 = mysqli_query($conn, "INSERT INTO posts (user_id, content, post_picture, post_video) VALUES ($user_id,'$content', '$new_picture_name', 'NULL')");

                echo "success";
            }
        }elseif(in_array($media_ext, $extensionsVideo) === true){
            $time = time();
            $new_video_name = $time . $media_name;

            if (move_uploaded_file($temp_name, "../asset/post/video/" . $new_video_name)) {
                $sql2 = mysqli_query($conn, "INSERT INTO posts (user_id, content, post_picture, post_video) VALUES ($user_id,'$content', 'NULL', '$new_video_name')");

                echo "success";
            }
        }else{
            echo "Please select media file - png, jpeg, jpg, mp4 !";
        }
    }
}
