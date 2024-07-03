<?php
    session_start();
    include_once "config.php";
    $sql = mysqli_query($conn, "SELECT * FROM users RIGHT JOIN posts ON users.unique_id = posts.user_id ORDER BY post_id DESC");
    $output = "";

    if(mysqli_num_rows($sql) == 0){
        $output .= '<div><i class="fa-solid fa-triangle-exclamation" style="padding-right: 6px;"></i> <span>There is no post to view !</span></div>';
    }elseif(mysqli_num_rows($sql) > 0){
        while($row = mysqli_fetch_assoc($sql)){
            $output .= '<div class="post">
                <div class="nav">
                    <div class="left">
                        <div class="profilePicture">
                            <img src="./asset/image/profile/'. $row['profilePicture'] .'" alt="">
                        </div>
                        <div class="userDetail">
                            <a href="profile.php?user_id='. $row['unique_id'] .'>" style="color: white; text-decoration: none;"><div class="name">'. $row['firstName'] . " " . $row['lastName'] .'</div></a>
                            <div class="userName">'. $row['userName'] .'</div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="time">5h</div>
                        <div class="more">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </div>
                    </div>
                </div>
                <div class="content">'. $row['content'] .'</div>
                <div class="interaction">
                    <i class="fa-regular fa-thumbs-up"></i>
                    <i class="fa-regular fa-comment"></i>
                    <i class="fa-solid fa-share"></i>
                </div>
            </div>';
        }
    }
    echo $output;
?>