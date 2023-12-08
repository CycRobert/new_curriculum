<?php session_start();?>
<!-- <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Test Select Tag</title>
</head>
<body>
	<div class="form">
		<form method = "POST">
			<select name="my_name">
				<option value = "Onapito">Onapito</option>
				<option value = "John">John</option>
				<option value = "Robert">Robert</option>
			</select>
			<select name="my_class">
				<option value = "S1">S1</option>
				<option value = "S2">S2</option>
				<option value = "S3">S3</option>
			</select>
			<input type="submit" name="submit" value="Test">
		</form>
	</div>
</body>
</html> -->
<?php

	include "db_connect.php";

	$first = "SELECT * FROM submitted WHERE groupname = 'Amos' ";
	$stmt = mysqli_query($conn,$first);
	$stmt->fetch_assoc();
	$rows = $stmt;

	foreach ($rows as $row) {
		echo $row['total_bud'];
	}

?>