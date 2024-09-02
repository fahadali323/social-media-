<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="header">
        <h1>mySocial</h1>
        <form action="/action_page.php">
            <input type="text" id="email" placeholder="Email address or phone number">
            <input type="text" id="password" placeholder="Password">
            <input type="submit" value="submit">
        </form>
    </div>
    <div class="main">
        <div>
            <h1>Find your account</h1>
            <p>Please enter your email or mobile number to search for your account.</p>
            <form action="/action_page.php">
                <input type="text" placeholder="Email or mobile number">
                <button class="cancel" onclick="">Cancel</button>
                <input class="submit" type="submit" value="submit">
            </form>
        </div>
    </div>
</body>
</html>