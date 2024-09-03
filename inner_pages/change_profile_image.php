<?php
  include("./../classes/connect.php");
  include("./../classes/login.php"); 
  include("./../classes/user.php");
  include("./../classes/post.php");

  //isset($_SESSION['mysocial_userid'])
  $login = new Login();
  $user_data = $login->check_login($_SESSION["mysocial_userid"]);

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != "")
    { 
      $filename = "../uploads/" . $_FILES['file']['name'];
      move_uploaded_file($_FILES['file']['tmp_name'], $filename);

      if(file_exists($filename))
      {
        $userid = $user_data["userid"];
        $query= "update users set profile_image='$filename' where userid='$userid' limit 1";
        $DB = new database();
        $DB->save($query);

        header("Location: profile.php");
        die;
      } else {

      }

    } else {
      echo "<div style='text-align:center; font-size: 12px; color:white;background-color:grey;'>";
      echo "<br>The following errors occured <br><br>";
      echo "Please add a valid image!<br>";
      echo "</div>";
    }
  } 

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile | MySocial</title>
    <link rel="stylesheet" href="./../styling/timeline.css?v=2" />

  </head>
  <body>
    <!--Top Bar-->
    <?php include("header.php") ?>

    <!--cover area-->
    <div class="content">
      
      <!--below cover area-->
      <div class="bottom">
        <!--friends area-->
        <div class="bottom_left">
          <div class="friends_bar">
            <img class="profile_pic" src="./../assets/selfie.jpg" alt="selfie_image"><br>
            <a class="name" href="profile.php">
              <?php echo $user_data["first_name"] . "<br> " . $user_data["last_name"]  ?>
            </a>
          </div>
        </div>

        <!--posts area-->
        <div class="bottom_right">
          <div class="bottom_right_area" style="min-height: 10px;">
            <form method="post" enctype="multipart/form-data">
              <input class="upload" type="file" name="file" >
              <input class="post_button" type="submit" value="Change"  style="width: 100px">
            <form>
            <br />
          </div>

          </div>
        </div>
      </div>
    </div>
  </body>
</html>
