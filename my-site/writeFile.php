<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn-> connect_error) {
	die("Donnection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO videoList (videoId, user, name) 
	VALUES ('8KN4m6rBaGo', '1', 'My First Video')";
	
if($conn->query($sql) === TRUE) {
	echo "Test Successful.";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

</body>
</html>