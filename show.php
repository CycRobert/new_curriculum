<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Show data</title>
</head>
<body>
	<?php

		$server = "localhost";
		$user = "root";
		$password = "";
		$database = "test";

		$conn = new mysqli($server, $user, $password, $database);

		$sql = "SELECT myname FROM info";
		$result = mysqli_query($conn, $sql);
		while($row = $result->fetch_assoc()){
			echo $row['myname'];
		}

	?>
</body>
</html>