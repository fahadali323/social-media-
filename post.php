<div class="post">
    <div>
    <?php
        $image = "../image/user_male.jpg";
        if ($ROW_USER['gender'] == 'Female') {
            $image = "../image/user_female.jpg";
        } 
    ?>
    <img class="post_img" src="<?php echo $image ?>" alt="user profile">
    </div>
    <div>
    <div class="post-user"> 
        <?php echo $ROW_USER['first_name'] . " " . $ROW_USER['last_name']; ?>
    </div>
    <?php  echo $ROW['post']; ?>   
    <br><br>
    <a href="">Like</a> . <a href="">Comment</a> . 
    <span style="color: #999">
        <?php echo $ROW['date'] ?>
    </span>
    </div>
</div>