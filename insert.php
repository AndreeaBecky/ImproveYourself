<?php

include('login.php'); // Includes Login Script

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$country = $_POST['country'];

if (!empty($username) || !empty($password) || !empty($email) || !empty($country))
{
	$host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "youtube";
	
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error())
	{
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }
	else
	{
     $SELECT = "SELECT email FROM register WHERE email = ? Limit 1";
     $INSERT = "INSERT INTO register (username, password, email, country) values(?, ?, ?, ?)";
     
	 //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
	 
     if ($rnum == 0)
	 {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $username, $password, $email, $country);
      $stmt->execute();
      echo "New record inserted sucessfully";
	  header("location: profile.php"); // Redirecting To Profile Page
     }
	 else
	 {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
}
else
{
 echo "All field are required";
 die();
}
?>