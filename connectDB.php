<?php
//requirements before connecting to server
$servername = "localhost";
$username = "Tjtech";
$password = "Sc212/1205/2017";
$db="tjtech";

// connecting to server
$conn = new mysqli($servername, $username, $password);

//testing connection
if($conn->connect_error){
die("connection faild" );
}

mysqli_close($conn);
?>
