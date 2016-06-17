<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn-> connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$testing = $_POST['videoId'];

$sql = "INSERT INTO videolist (videoId, user, title) 
		VALUES ('".$testing."', 2, 'TestVideo')";

if($conn->query($sql) === TRUE) {
	echo "Test Successful.";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();
?>