<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "pasar";
	$conn = new mysqli($servername, $username, $password, $dbname);
	$sql = "SELECT* FROM data_pasar";
	$result = $conn->query($sql);
	 include 'connection.php';
  	if (!$result) {
    trigger_error('Invalid query: ' . $conn->error);
	}
	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "nama pasar: " . $row["nama"]. "<br>";
		}
		} else {
			echo "0 results";
			}
 
?>
