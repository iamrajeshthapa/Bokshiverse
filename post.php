<?php
    session_start();
    if(!isset($_SESSION['unique_id'])){
        header("location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bokshiverse - Post</title>
    <link rel="stylesheet" href="./css/post.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <div class="nav">
        <div class="logo">POST</div>
        <a href="home.php" style="color: white;"><i class="fa-solid fa-delete-left" style="font-size: 20px;"></i></a>
        </div>
        <div class="wrapper">
            <form action="#" enctype="multipart/form-data">
                <textarea name="content" id="" placeholder="What's on your mind ?"></textarea>
                <div class="update"><span>Media selected</span> <i class="fa-solid fa-circle-check"></i></div>
                <div class="add">
                    <input type="file" name="postMedia" id="postMediaInput" hidden>
                    <button id="mediaButton"><i class="fa-solid fa-photo-film"></i>Media</button>
                    <button><i class="fa-solid fa-tag"></i>Tag a friend</button>
                </div>
                <button id="submit"><div id="load">POST</div></button>
            </form>
        </div>
    </div>
    <script src="./js/post.js" async defer></script>
</body>
</html>