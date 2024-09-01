<?php
  include("./../classes/connect.php");
  include("./../classes/login.php"); 

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
      echo "everything is fine";
    }else {
      header("Location: login.php");
      die;
    }  
  } else {
    header("Location: ./../login.php");
    die;
  }

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
          <div class="name">Mary Banda</div>
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
            <textarea placeholder="Whats on your mind?"></textarea>
            <input class="post_button" type="submit" value="POST" />
            <br />
          </div>

          <!--posts-->
          <div class="post_bar">
            <!--posts 1 -->
            <div class="post">
              <div>
                <img class="post_img" src="../assets/user1.jpg" alt="user profile">
              </div>
              <div>
                <div class="post-user">First Guy</div>
                What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the
                printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an
                unknown printer took a galley of type and scrambled it to make a
                type specimen book. It has survived not only five centuries, but
                also the leap into electronic typesetting, remaining essentially
                unchanged. It was popularised in the 1960s with the release of
                Letraset sheets containing Lorem Ipsum passages, and more
                recently with desktop publishing software like Aldus PageMaker
                including versions of Lorem Ipsum.
                <br><br>
                <a href="">Like</a> . <a href="">Comment</a> .<span style="color: #999">April 23 2020</span>
              </div>
            </div>

            <!--posts 2 -->
            <div class="post">
                <div>
                  <img class="post_img" src="../assets/user4.jpg" alt="user profile">
                </div>
                <div>
                  <div class="post-user">African Dude</div>
                  What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the
                  printing and typesetting industry. Lorem Ipsum has been the
                  industry's standard dummy text ever since the 1500s, when an
                  unknown printer took a galley of type and scrambled it to make a
                  type specimen book. It has survived not only five centuries, but
                  also the leap into electronic typesetting, remaining essentially
                  unchanged. It was popularised in the 1960s with the release of
                  Letraset sheets containing Lorem Ipsum passages, and more
                  recently with desktop publishing software like Aldus PageMaker
                  including versions of Lorem Ipsum.
                  <br><br>
                  <a href="">Like</a> . <a href="">Comment</a> .<span style="color: #999">April 23 2020</span>
                </div>
              </div>



          </div>
        </div>
      </div>
    </div>
  </body>
</html>
