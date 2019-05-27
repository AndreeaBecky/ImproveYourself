<?php

include('session.php');

$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "youtube";

$result_array = array();

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
if($conn->connect_error)
{
    die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
}
else
{
    $SELECT = "SELECT username, country FROM register";
    $username = $_POST['username'];
    $result = mysqli_query($conn, $SELECT);
    ?>

    <table>
    <tr>
        <th>Username</th>
        <th style='text-align: inherit'>Country</th>
    </tr>

    <?php
        while($row = mysqli_fetch_array($result))
        {
    ?>
        <tr>
        <?php
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['country']."</td>";
        ?>
        </tr>
    <?php
        }
    ?>

    </table>
    <?php
    $conn->close();
}
    ?>
