<?php
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
        <div class="user">
            <div class="left">
                <div class="profilePicture">
                    <img src="./asset/image/profile/'. $row['profilePicture'] .'" alt="">
                </div>
                <div class="userDetail">
                    <div class="name">'. $row['firstName'] . " " . $row['lastName'] .'</div>
                    <div class="messageSnippet">Yo! whatsup</div>
                </div>
            </div>
            <div class="right">
                <div class="status">
                    <i class="fa-solid fa-circle" style="color: greenyellow;"></i>
                </div>
            </div>
        </div>
        </a>';
    }
?>