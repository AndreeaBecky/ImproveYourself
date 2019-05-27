<?php

include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
    header("location: profile.php"); // Redirecting To Profile Page
}

?> 

<!DOCTYPE html>
<html lang="zxx">
<!-- to be changed in "en" -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Improve Yourself - Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/form-style.css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="header">
            <a class="header-item-1 menu-item-active" href="./main.html">Home</a>
            <a class="header-item-2" href="./about.html">About Us</a>
            <a class="header-item-3" href="./videos.html">Videos</a>
            <a class="button" style="color:white" href="./register.html">Login / Sign Up</a>
            <div class="header-item-5">Follow Us:
                <a href="https://www.facebook.com/becky.deea"><span class="social facebook"></span></a>
                <a href="https://www.instagram.com/andreea_becky/?hl=ro"><span class="social instagram"></span></a>
                <a href="https://www.tumblr.com/blog/rockingdemons"><span class="social tumblr"></span></a>
            </div>
        </nav>
    </header>

    <div class="image"></div>

    <h1 class="title">Improve Yourself</h1>

    <aside class="aside">
        <a class="aside-prod" href="./productivity.html">Productivity</a>
        <a class="aside-motiv" href="./motivation.html">Motivation</a>
        <a class="aside-insp" href="./inspiration.html">Inspiration</a>
        <a class="community" href="./community.php">Community</a>
    </aside>

    <div class="container">
        <main>
          <div id="login">
          <h2>Login</h2>
          <form action="" method="post">

            <table>
            <tr>
            <div class="col-25">
                <td style="color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black";>Name :</td>
            </div>
            <div class="col-75">
                <td><input type="text" name="username" placeholder="Your username" required></td>
            </div>
            </tr>
            <tr>
            <div class="col-25">
                 <td style="color: white; text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black";>Password :</td>
            </div>
            <div class="col-75">
                <td><input id="myInput" type="password" name="password" placeholder="Your password" required><br><br>
            </div>
            </tr>
            <tr>
            <p id="textArea">WARNING! Caps lock is ON.</p>
            </table> 
            <div class="row">
            <input name="submit" style="width: 110px; height: 60px;" type="submit" value="Login">
            </div>
            <span><?php echo $error; ?></span>
            </form>

            <p>
            Not yet a member? <a href="register.html">Sign up</a>
            </p>

            </div>

        </main>

    </div>

 <script src="form.js"></script>

</body>
</html>


