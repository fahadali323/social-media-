<?php
  include("./../classes/connect.php");
  include("./../classes/login.php"); 
  include("./../classes/user.php");
  include("./../classes/post.php");

  //isset($_SESSION['mysocial_userid'])
  $login = new Login();
  $user_data = $login->check_login($_SESSION["mysocial_userid"]);

  // posting starts here
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $post = new Post();
    $id = $_SESSION['mysocial_userid'];
    $result = $post->create_post($id, $_POST);

    if($result == "")
    {
      header("Location: profile.php");
      die;
    } else {
        echo "<div style='text-align:center; font-size: 12px; color:white;background-color:grey;'>";
        echo "<br>The following errors occured <br><br>";
        echo $result;
        echo "</div>";
    }
  }
  //collect posts
  $post = new Post();
  $id = $_SESSION["mysocial_userid"];
  $posts = $post->get_posts($id);

  //collect friends 
  $user = new User();
  $id = $_SESSION["mysocial_userid"];
  $friends = $user->get_friends($id);

  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile | MySocial</title>
    <link rel="stylesheet" href="./../styling/profile.css?v=2" />
  </head>
  <body>
    <!--Top Bar-->
    <?php include("header.php") ?>
    <!--cover area-->
    <div class="content">
      <div class="contents">
        <div class="mountains">
          <?php 
          $image = "";
          if (file_exists($user_data["cover_image"])) {
              $image = $user_data['cover_image'];
          } else {
          
          } 
          ?>
          <img
            class="mountain_image"
            src="<?php echo $image ?>"
            alt="mountain image"
          />
          <?php 
          $image = "";
          if (file_exists($user_data["profile_image"])) {
              $image = $user_data['profile_image'];
          } else {

          }
          ?>
          <img
            class="profile_pic"
            src="<?php echo $image ?>" 
            alt="profile image"
          />
          <br/>
          <a class="change_profile_image" href="change_profile_image.php?change=profile">Change Profile</a> |
          <a class="change_profile_image" href="change_profile_image.php?change=cover">Change Cover</a> 
          <br/>
          <div class="name"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></div>
          <br />
          <div class="menu_buttons"><a href="timeline.php">Timeline</a></div>
          <div class="menu_buttons">About</div>
          <div class="menu_buttons">Friends</div>
          <div class="menu_buttons">Photos</div>
          <div class="menu_buttons">Settings</div>
        </div>
      </div>
      <!--below cover area-->
      <div class="bottom">
        <!--friends area-->
        <div class="bottom_left">
          <div class="friends_bar">
            Friends <br />
            <?php 
            if ($friends)
            {
              foreach($friends as $FRIEND_ROW)
              { 
                //retreive posts for user
                include("../friends.php");
              }
            }
            ?>
          </div>
        </div>

        <!--posts area-->
        <div class="bottom_right">
          <div class="bottom_right_area">
            <form method="post">
              <textarea name="post" placeholder="Whats on your mind?"></textarea>
              <input class="post_button" type="submit" value="POST" />
              <br />
            </form>
          </div>

          <!--posts-->
          <div class="post_bar">
            <?php 

              if ($posts)
              {
                foreach($posts as $ROW)
                { 
                  //retreive posts for user
                  $user = new User();
                  $ROW_USER = $user->get_user($ROW['userid']);
                  
                  include("../post.php");
                }
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
