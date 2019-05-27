<?php

include('session.php');

if(!isset($_SESSION['login_user'])){
	// echo "You must be logged in to visit your profile";
	header("location: form.php"); // Redirecting To form page
}

?>

<!DOCTYPE html>
<html lang="zxx">
<!-- to be changed in "en" -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Improve Yourself - Profile</title>
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" type="text/css" media="screen" href="css/profile.css"/>
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

    <h1 class="title" style="font-size:5vw;">Improve Yourself</h1>

    <aside class="aside">
        <a class="aside-prod" href="./productivity.html">Productivity</a>
        <a class="aside-motiv" href="./motivation.html">Motivation</a>
        <a class="aside-insp" href="./inspiration.html">Inspiration</a>
        <a class="aside-community" href="./community.php">Community</a>
    </aside>

    <div class="container" style="overflow:auto">
      <main>
        <p><b class="welcome">Welcome : <i><?php echo $login_session; ?></i></b></p>
        <p><a class="logoutBtn" style="width: 110px; height: 60px; font-size: 25px; color:white" href="logout.php">Log Out</a></p>
      </main>
    </div>

  </body>

</html>