<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		.form1{
			border-top: 1px solid black;
			border-left: 1px solid black;
			border-bottom: 1px solid black;
			border-right: 1px solid black;
			font: cursive;
			font-style: italic;
		}
		h1{
			margin-left: 1em;
		}
		.input{
			width: 18em;
			height: 2em;
			margin-left: 2em;
			margin-top: 1em;
			margin-bottom: 1em;
		}
		.submit{
			font: cursive;
			font-style: italic;
			width: 18em;
			height: 2em;
			margin-left: 2em;
			margin-top: 1em;
			margin-bottom: 1em;
			border-radius: .4em;
			border-color: black;
			color: white;
			background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
		}
		.submit:hover{
			cursor: pointer;
			color: black;
			background: white;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){

		})
	</script>
</head>
<body>
	<div class="form1">
		<h1>Fill out this form please</h1>
		<form method="post" action="" enctype="multipart/form-data">
			<input type="text" name="my_name" placeholder="Input Name"><br>
			<input type="submit" name="submit" class="submit" value="Upload">
		</form>
		
		<div class="php">
			<?php

				
				$server = "localhost";
				$user = "root";
				$password = "";
				$database = "test";

				$conn = new mysqli($server, $user, $password, $database);

				$name = $_POST['my_name'];

				if(isset($_POST['submit'])){
					$sql = "INSERT INTO info(myname) VALUES('$name')";
					if($conn->query($sql) === TRUE){
						echo "<script>alert('Data inserted, lets try to select it');location.href='show.php';</script>";
					}else{
						echo "<script>alert('Keep trying');</script>";
					}
				}

				

			?>
		</div>
		
	</div>
</body>
</html>