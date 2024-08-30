<?php 

include("classes/connect.php");
include("classes/login.php");

$email = "";
$password = "";


if($_SERVER['REQUEST_METHOD'] == "POST")
{
  $login = new Login();
  $result = $login->evaluate($_POST);

  if ($result !="")
  {
    echo "<div style='text-align:center; font-size: 12px; color:white;background-color:grey;'>";
    echo "The following errors occured <br>";
    echo $result;
    echo "</div>";
  } else {
    header("Location: ./inner_pages/profile.php");
    die;
  }

  $email = $_POST['email'];
  $password = $_POST['password'];

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MySocial | Login</title>
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
              <div class="lux">
                <h3>Login to MySocial</h3>
                <input
                  value="<?php echo $email ?>"
                  type="text"
                  class="inputtext"
                  name="email"
                  id="email"
                  placeholder="Email"
                  autofocus="1"
                />
              </div>
              <div class="lux">
                <input
                  value="<?php echo $password ?>"
                  type="password"
                  class="inputtext"
                  name="pass"
                  id="pass"
                  placeholder="Password"
                />
              </div>
              <div class="blue_button">
              <input
                class="bluebutton"
                type="submit"
                id="button"
                value="Log In"
              />
            </div>
              <div class="forgot">
                <a href="./forgotten.php">Fogot password?</a>
              </div>
              <div class="break"></div>
              <div>
                  <a
                  role="button"
                  class="breakbutton"
                  href="./signup.php"
  
                  >Create new account</a
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
