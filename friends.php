<div class="friends">
    <?php 
     $image = "../image/user_male.jpg";
     if ($FRIEND_ROW['gender'] == 'Female') {
         $image = "../image/user_female.jpg";
     } 
     ?>
    <img class="friends_img" src="<?php echo $image ?>" alt="guy page" />
    <br />
    <?php echo $FRIEND_ROW['first_name'] . " " . $FRIEND_ROW['last_name'] ?>
</div>