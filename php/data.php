<?php
    while($row = mysqli_fetch_assoc($sql)){
        $output .= '<a href="chat.php?user_id='. $row['unique_id'] .'">
        <div class="user">
            <div class="left">
                <div class="profilePicture">
                    <img src="./asset/profile/image/'. $row['profilePicture'] .'" alt="">
                </div>
                <div class="userDetail">
                    <div id="name">
                               <div class="name">'. $row['firstName'] . " " . $row['lastName'] .'</div>
                               <i class="fi fi-sr-shield-trust" id="'. $row['verification_status'] .'"></i>
                    </div>
                    <div class="messageSnippet">You are now connected</div>
                </div>
            </div>
            <div class="right">
                <div class="status">
                    <i class="fa-solid fa-circle '. $row['status'] .'"></i>
                </div>
            </div>
        </div>
        </a>';
    }
?>