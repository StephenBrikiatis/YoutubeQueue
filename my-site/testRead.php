function getServerData(){

var serverData = <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT videoId FROM videoList LIMIT 1;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo json_encode($row["videoId"]);
		$delete = "DELETE FROM videoList WHERE videoId='".$row["videoId"]."' LIMIT 1;";
		$conn->query($delete);
	}
} else {
	echo "'No results'";
}

$conn->close();
?>;
//console.log(serverData);
return serverData;
}