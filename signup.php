<?php
  include("classes/connect.php");
  include("classes/signup.php");

  $first_name = "";
  $last_name = "";
  $gender = "";
  $email = "";
  
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $signup = new SignUp();
    $result = $signup->evaluate($_POST);

    if ($result !="")
    {
      echo "<div style='text-align:center; font-size: 12px; color:white;background-color:grey;'>";
      echo "The following errors occured <br>";
      echo $result;
      echo "</div>";
    }

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
 
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
  }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MySocial | SignUp</title>
    <link rel="stylesheet" href="./styling/index.css" />
  </head>
  <body>
    <div class="top">
      <div class="upper">
        <div class="left">
          <h1>mySocial</h1>
          <h2>Connect with friends and the world around you on MySocial.</h2>
        </div>
        <div class="right">
          <h3>Sign up to MySocial</h3>
          <form action="" method="POST">
            <div class="lux">
              <input
                value="<?php echo $first_name ?>"
                type="text"
                class="inputtext"
                name="first_name"
                id="first_name"
                placeholder="First Name"
            
              />
            </div>
            <div class="lux">
              <input
                value="<?php echo $last_name ?>"
                type="text"
                class="inputtext"
                name="last_name"
                id="last_name"
                placeholder="Last Name"
           
              />
            </div>
            <div>Gender:</div>
            <div class="lux">
              <select name="gender" id="text" class="inputtext">
                <option><?php echo $gender ?></option>
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <div class="lux">
              <input
                value="<?php echo $email ?>"
                type="text"
                class="inputtext"
                name="email"
                id="email"
                placeholder="Email"
      
              />
            </div>
            <div class="lux">
              <input
                type="password"
                class="inputtext"
                name="password"
                id="pass"
                placeholder="Password"

              />
            </div>
            <div class="lux">
              <input
                type="password"
                class="inputtext"
                name="password2"
                id="pass"
                placeholder="Retype Password"
       
              />
            </div>
            <div class="blue_button">
              <input
                class="bluebutton"
                type="submit"
                id="button"
                value="Sign up"
              />
            </div>
          </form>
          <div class="break"></div>
          <div>
            <a role="button" class="breakbutton" href="./login.html" rel="async"
              >Log In</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
      <p>This is the footer section.</p>
    </div>
  </body>
</html>
