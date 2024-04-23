<?php
$username="Tjtech";
$servername="localhost";
$password="1234";

//creating connection
$conn = new mysqli($username, $servername, $password);

if ($conn->connection_error)
{
	die ("connection faild" );
}

//creating database
$sql= "CREAT DATABASE amaniDB";

if($conn->query($sql)){
	echo"database created successfully";
}
else{
	echo"error creating database".$conn->connection_error;
}

$conn->close();
?>