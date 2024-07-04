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
                <a href="profile.php?user_id='. $row['unique_id'] .'" style="color: white; text-decoration: none;">
                    <div class="left">
                        <div class="profilePicture">
                            <img src="./asset/profile/image/'. $row['profilePicture'] .'" alt="">
                        </div>
                        <div class="userDetail">
                            <div id="name">
                               <div class="name">'. $row['firstName'] . " " . $row['lastName'] .'</div>
                               <i class="fi fi-sr-shield-trust" id="'. $row['verification_status'] .'"></i>
                            </div>
                            <div class="userName">'. $row['userName'] .'</div>
                        </div>
                    </div>
                </a>
                    <div class="right">
                        <div class="time">5h</div>
                        <div class="more">
                            <i class="fa-solid fa-ellipsis-vertical"></i>
                        </div>
                    </div>
                </div>
                <div class="content" id="'. $row['content'] .'">'. $row['content'] .'</div>
                <div class="postPicture" id="'. $row['post_picture'] .'">
                    <img src="asset/post/image/'. $row['post_picture'] .'" />
                </div>
                <div class="postVideo" id="'. $row['post_video'] .'">
                    <video controls loop>
                      <source src="asset/post/video/'. $row['post_video'] .'" type="video/mp4">
                    </video>
                </div>
                <div class="interaction">
                    <div><i class="fa-regular fa-thumbs-up"></i> 0</div>
                    <div><i class="fa-regular fa-thumbs-down"></i> 0</div>
                    <div><i class="fa-regular fa-comment"></i> 0</div>
                </div>
            </div>';
        }
    }
    echo $output;
?>