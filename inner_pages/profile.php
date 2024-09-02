<?php
  include("./../classes/connect.php");
  include("./../classes/login.php"); 
  include("./../classes/user.php");
  include("./../classes/post.php");

  // unset($_SESSION['mysocial_userid']);
  // echo ($_SESSION['mysocial_userid']);
  //check if user is logged in
  if(isset($_SESSION['mysocial_userid']) && is_numeric($_SESSION['mysocial_userid']))
  {
    $id = $_SESSION['mysocial_userid'];
    $login = new Login();
   
    $result = $login->check_login($id);
    if($result){
      //retrive user data
      $user = new User();
      $user_data = $user->get_data($id);

      if(!$user_data)
      {
        header("Location: login.php");
        die;
      }
    }else {
      header("Location: login.php");
      die;
    }  
  } else {
    header("Location: ./../login.php");
    die;
  }
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
        echo "The following errors occured <br>";
        echo $result;
        echo "</div>";
    }
  }
  //collect posts
  $post = new Post();
  $id = $_SESSION["mysocial_userid"];
  $posts = $post->get_posts($id);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile | MySocial</title>
    <link rel="stylesheet" href="./../styling/profile.css" />
  </head>
  <body>
    <!--Top Bar-->
    <div class="blue_bar">
      <div class="title">
        MySocial
        <input
          type="text"
          class="search_box"
          id="search_box"
          placeholder="Search for people"
        />
        <img class="selfie" src="./../assets/selfie.jpg" alt="selfie image" />
        <a href="./../logout.php">
          <span style="color: white;font-size:13px; float:right; margin: 11px">Logout</span>
        </a>
      </div>
    </div>
    <!--cover area-->
    <div class="content">
      <div class="contents">
        <div class="mountains">
          <img
            class="mountain_image"
            src="../assets/mountain.jpg"
            alt="mountain image"
          />
          <img
            class="profile_pic"
            src="../assets/selfie.jpg"
            alt="profile image"
          />
          <br />
          <div class="name"><?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></div>
          <br />
          <div class="menu_buttons">Timeline</div>
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
            <div class="friends">
              <img
                class="friends_img"
                src="./../assets/user1.jpg"
                alt="guy page"
              />
              <br />
              First User
            </div>
            <div class="friends">
              <img
                class="friends_img"
                src="./../assets/user2.jpg"
                alt="guy page"
              />
              <br />
              Second User
            </div>
            <div class="friends">
              <img
                class="friends_img"
                src="./../assets/user3.jpg"
                alt="guy page"
              />
              <br />
              African Girl
            </div>
            <div class="friends">
              <img
                class="friends_img"
                src="./../assets/user4.jpg"
                alt="guy page"
              />
              <br />
              African Dude
            </div>
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
                  
                  include("./../post.php");
                }
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
