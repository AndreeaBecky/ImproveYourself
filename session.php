<?php

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "youtube";


// mysqli_connect() function opens a new connection to the MySQL server.
//$conn = mysqli_connect("localhost", "root", "", "company");

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

session_start();// Starting Session

// Storing Session
$user_check = $_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$SELECT = "SELECT username FROM register WHERE username = '$user_check'";
$ses_sql = mysqli_query($conn, $SELECT);
$row = mysqli_fetch_assoc($ses_sql);
$login_session = $row['username'];

?>