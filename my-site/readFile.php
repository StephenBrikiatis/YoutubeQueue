<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * From videoList";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "videoId: " . $row["videoId"]. " - User: " . $row["user"]. " - Name: ". $row["name"]. "<br>";
	}

} else {
	echo "No results";
}

$conn->close();

?>

</body>
</html>