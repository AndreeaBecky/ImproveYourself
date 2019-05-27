<?php

session_start(); // Starting Session
$error = ''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Username or Password is invalid";
}
else
{
	// Define $username and $password
	$username = $_POST['username'];
	$password = $_POST['password'];

	$host = "localhost";
   	$dbUsername = "root";
   	$dbPassword = "";
   	$dbname = "youtube";

	// mysqli_connect() function opens a new connection to the MySQL server.
   	//create connection
   	$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
	if (mysqli_connect_error())
	{
     		die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
   	}
	else 
	{
		// SQL query to fetch information of registerd users and finds user match.
		$SELECT = "SELECT username, password From register Where username = ? AND password = ? Limit 1";
		
		// To protect MySQL injection for Security purpose
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("ss", $username, $password);
		$stmt->execute();
		$stmt->bind_result($username, $password);
		$stmt->store_result();

		if($stmt->fetch()) //fetching the contents of the row
		{
         		$_SESSION['login_user'] = $username; // Initializing Session
          		header("location: profile.php"); // Redirecting To Profile Page
       	}
		else
		{
       			$error = "Username or Password is invalid";
     	}
		$conn->close(); // Closing Connection
	}
}

}

?>