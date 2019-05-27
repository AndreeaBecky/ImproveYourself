<?php

include('session.php');
// session_start();
if(!isset($_SESSION['login_user'])){
	header("location: form.php"); // Redirecting To Home Page
}

// echo 'Current script owner: ' . get_current_user();

?>

<!DOCTYPE html>
<html lang="zxx">
<!-- to be changed in "en" -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Improve Yourself - Community</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/comm-style.css" />
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="header">
            <a class="header-item-1 menu-item-active" href="./main.html">Home</a>
            <a class="header-item-2" href="./about.html">About Us</a>
            <a class="header-item-3" href="./videos.html">Videos</a>
            <a class="button" href="./register.html" style="color: white;">Login / Sign Up</a>
            <div class="header-item-5">Follow Us:
                <a href="https://www.facebook.com/becky.deea"><span class="social facebook"></span></a>
                <a href="https://www.instagram.com/andreea_becky/?hl=ro"><span class="social instagram"></span></a>
                <a href="https://www.tumblr.com/blog/rockingdemons"><span class="social tumblr"></span></a>
            </div>
        </nav>
    </header>

    <div class="image"></div>

    <h1 id="h1" class="title">Improve Yourself</h1>

    <aside class="aside">
        <a class="aside-prod" href="./productivity.html">Productivity</a>
        <a class="aside-motiv" href="./motivation.html">Motivation</a>
        <a class="aside-insp" href="./inspiration.html">Inspiration</a>
        <a class="aside-community" href="./community.php">Community</a>
    </aside>
    <div class="container">
        <main>
            <h2 class="motto">COMMUNITY</h2>
            <br>
            <button class="inspireBtn" onclick="myFunction()">Inspire me!</button>
            <button class="deleteBtn" onclick="removeElementsByClass()">Delete pictures</button>
            <button type="button" class="showUsersBtn" onclick="showUsers()">Show users</button>
            
            <div id="suggestion"></div>
            
            <div id="placehere"></div>

        </main>

    </div>

    <div class="footer">
        <footer style="margin-top: 18px;">
            <p>Designed with lots of love by Becks. </p>
        </footer>
    </div>

    <script src="script.js"></script>
    <script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
    <!-- <script src="alert.js"></script> -->

</body>

</html>