<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projects</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		.body{
			background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
			background-repeat: no-repeat;
			background-size: 130em 170em;
			font: cursive; 
			font-style: italic;
		}
		.navbar{
			background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7));
			padding-top: 1em;
			padding-bottom: 1em;
			padding-left: .5em;
			padding-right: .5em;
		}
		.navs{
			display: flex;
		}
		#nav1 a{
			color: white;
			text-decoration: none;
			font:cursive;
			font-style: italic;
			font-size: 1em;
		}
		#nav2 a{
			color: white;
			text-decoration: none;
			font:cursive;
			font-style: italic;
			font-size: 1em;
			margin-left: 1.5em;
		}
		#nav2 a:hover{
			color: orange;
		}
		#nav2{
			margin-left:56em;
		}
		.tags{
			display: flex;
			margin-left: 67.3em;
		}
		.tag1{
			margin-left: .3em;
			border-top: 1px solid white;
			width: 0em;
			transition: 4s;
		}
		.tag2{
			border-top: 1px solid white;
			width: 0em;
			margin-left:1.5em;
			transition: 4s;
		}
		.tag3{
			border-top: 1px solid white;
			width: 0em;
			margin-left:1.5em;
			transition: 4s;
		}
		.tag4{
			border-top: 1px solid white;
			width: 0em;
			margin-left:1.5em;
			transition:4s;
		}
		.line1{
			margin-top: 1em;
			border-top: 1px solid white;
			transition: 4s;
			width: 0em;
		}
		.line3{
			margin-top: 1em;
			border-top: 1px solid white;
			transition: 4s;
			width: 0em;
		}

		.head{
			margin-top: 6em;
			text-align: center;
		}
		.heading{
			color: white;
			font-size: 2em;
			font-weight: bold;
			transition: 4s;
			font-style: italic;
			font: cursive;
		}
		.orange{
			color: white;
			transition: 4s;
		}
		.orange1{
			color: white;
			transition: 4s;
		}
		.line2{
			border-top: 1px solid white;
			margin-left: 32em;
			width: 0em;
			transition: 4s;
		}
		.para{
			color: white;
			font-size: 1em;
			font-style: italic;
			font: cursive;
			display: none;
		}
		.para1{
			color: white;
			font-size: 1em;
			font-style: italic;
			font: cursive;
		}
		.para2{
			color: white;
			font-size: 1em;
			font-style: italic;
			font: cursive;
			margin-left: 50em;
			margin-bottom: 1em;
		}
		.links{
			display: flex;
			margin-left: 37em;
		}
		.para1{
			color: white;
			font-size: 1em;
			font-style: italic;
			font: cursive;
		}
		.para2{
			color: white;
			font-size: 1em;
			font-style: italic;
			font: cursive;
			margin-left: 50em;
			margin-bottom: 1em;
		}
		.links{
			display: flex;
			margin-left: 37em;
		}
		.button{
			color: white;
			background: none;
			font-size: .8em;
			font-style: italic;
			font: cursive;
			width: 8em;
			height: 2em;
			border-color: white;
			border-radius: .4em;
			transition: 2s;
		}
		.button:hover{
			color: orange;
			background: white;
			cursor: pointer;
			width: 8.5em;
			height: 2.2em;
		}
		.butt1{
			color: white;
			background: none;
			font-size: .8em;
			font-style: italic;
			font: cursive;
			width: 8em;
			height: 2em;
			border-color: white;
			border-radius: .4em;
			transition: 2s;
			margin-top: 1em;
			margin-left: 1em;
		}
		.butt1:hover{
			color: orange;
			background: white;
			cursor: pointer;
			width: 8.5em;
			height: 2.2em;
		}
		.button1{
			margin-left: 1em;
			color: orange;
			background: none;
			font-size: .8em;
			font-style: italic;
			font: cursive;
			width: 8em;
			height: 2em;
			border-color: orange;
			border-radius: .4em;
			transition: 2s;
		}
		.button1:hover{
			color: white;
			background: orange;
			border-color: orange;
			cursor: pointer;
			width: 8.5em;
			height: 2.2em;
		}
		.footer{
			margin-top: 10em;
			padding-top: 1em;
			padding-bottom: 1em;
			padding-left: 1em;
			padding-right: 1em;
			background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
		}
		.copy{
			dispay: flex;
		}
		.copy a{
			text-decoration: none;
			justify-content: space-between;
		}
		.h11{
			color: white;
			font-size: 1.5em;
			text-decoration: underline;
			text-align: center;
			margin-top: 2em;
		}
		.inputs1{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 38em;
			transition: 3s;
		}
		.input{
			margin-top: 1em;
			margin-left: 35em;
		}
		.inputs2{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 38em;
			transition: 4s;
		}
		.inputs3{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 41em;
			transition: 7s;
		}
		.input{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 41em;
			transition: 6s;
		}
		.input1{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 2em;
			transition: 6s;
		}
		.submit{
			margin-left: 38em;
			margin-top: 1em;
			width: 0em;
			height: 2.3em;
			color: white;
			border-color: whitesmoke;
			background: none;
			border-radius: .4em;
			transition: 2s;
		}
		.submit:hover{
			cursor: pointer;
			color: orange;
			background: white;
		}
		.label{
			color: black;
			font-size: 1.2em;
			margin-top: 2em;
			margin-left: 33em;
		}
		.text1{
			width: 0em;
			height: 10em;
			border-radius: .4em;
			margin-top: 1em;
			font: cursive;
			font-style: italic;
			margin-left: 38em;
			transition: 5s;
		}
		.text2{
			width: 0em;
			height: 10em;
			border-radius: .4em;
			margin-top: 1em;
			font: cursive;
			font-style: italic;
			margin-left: 38em;
			transition: 6s;
		}
		.text3{
			width: 0em;
			height: 10em;
			border-radius: .4em;
			margin-top: 1em;
			font: cursive;
			font-style: italic;
			margin-left: 38em;
			transition: 7s;
		}
		.text4{
			width: 0em;
			height: 10em;
			border-radius: .4em;
			margin-top: 1em;
			font: cursive;
			font-style: italic;
			margin-left: 38em;
			transition: 8s;
		}
		.text5{
			width: 0em;
			height: 10em;
			border-radius: .4em;
			margin-top: 1em;
			font: cursive;
			font-style: italic;
			margin-left: 38em;
			transition: 9s;
		}
		.text6{
			width: 0em;
			height: 10em;
			border-radius: .4em;
			margin-top: 1em;
			font: cursive;
			font-style: italic;
			margin-left: 38em;
			transition: 10s;
		}
		.text7{
			width: 0em;
			height: 10em;
			border-radius: .4em;
			margin-top: 1em;
			font: cursive;
			font-style: italic;
			margin-left: 38em;
			transition: 11s;
		}
		table tr th input{
			width: 10em;
			height: 1.4em;
			color: black;
			background: none;
			border-color: black;
			border-radius: .4em;
		}
		table tr th input:hover{
			cursor: pointer;
			color: black;
			background: white;
			border-color: white;
			border-radius: .4em;
		}
		table tr td{
			padding: .4em;
		}
		table tr td:hover{
			background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
		}
		.budgets{
			width: 10em;
			height: 1.4em;
		}
		
		table{
			margin-left: 30em;
		}
		table tr{
			margin-left: 30em;
			border-right: 1px solid black;
			border-bottom: 1px solid black;
		}
		table tr th{
			background: orange;
			padding: .8em;
			border: 1px solid orange;
		}
		#row1{
			background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25));
		}

	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#tag1").css("width", "3.1em");
			$("#tag2").css("width", "3.3em");
			$("#tag3").css("width", "3.3em");
			$("#tag4").css("width", "3.3em");
			$("#line").css("width", "100%");
			$("#line3").css("width", "100%");
			$("#orange").css("color", "orange");
			$("#orange1").css("color", "orange");
			$("#line2").css("width", "23em");
			$("#para").fadeIn(4000);
			$("#inputs1").css("width", "35em");
			$("#inputs2").css("width", "35em");
			$("#inputs3").css("width", "35em");
			$("#input").css("width", "11em");
			$("#input1").css("width", "11em");
			$("#submit").css("width", "35em");
			$("#para1").fadeIn(4000);
			$("#text1").css("width", "35em");
			$("#text2").css("width", "35em");
			$("#text3").css("width", "35em");
			$("#text4").css("width", "35em");
			$("#text5").css("width", "35em");
			$("#text6").css("width", "35em");
			$("#text7").css("width", "35em");
			$("#stu").on("click", function(){
				window.location.href = "projectnew.php";
			})
			$(".last").on("click", function(){
				$("#last").css("display", "none");
			})
			$("#budget").on("click", function(){
				location.href="budget.php";
			});
			$(".tagf").on("click", function(){
				location.href="projecont.php";
			})
			$("#tagth").on("click", function(){
				alert("You must go to the next page to use this feature");
			})
		})
	</script>
</head>
<body class="body">
	<nav class="navbar">
		<nav class="navs">
			<nav id="nav1">
				<a href="#">
					New Curriculum Program
				</a>
			</nav>
			<nav id="nav2">
				<a href="index.php" class="tago">Home</a>
				<a href="#" class="tagt">Student</a>
				<a href="#" id="tagth">Get help</a>
				<a href="#" class="tagf">Continue</a>
			</nav>
		</nav>
			<div class="tags">
				<div class="tag1" id="tag1"></div>
				<div class="tag2" id="tag2"></div>
				<div class="tag3" id="tag3"></div>
				<div class="tag4" id="tag4"></div>
			</div>
		<div class="line1" id="line"></div>
		<div class="empty"></div>
	</nav>
	<div class="head">
		<div id="head">
			<p class="heading" id="heading">
				Preview your <span class="orange" id="orange">Project</span>
			</p>
			<p class="line2" id="line2"></p>
		</div>
		<div class="notes">
			<p class="para" id="para">
				Being an architect, you and your group are prompted<br>note down the necessary <br>that best match the requirements.
			</p>
		</div>
	</div>
	<h1 class="h11">Preview page</h1>
	<div class="parts" id="parts">
		<form method="post" enctype="multipart/form-data">
			<input type="title" class="inputs1" id="inputs1" value="
			<?php
				error_reporting(0);
			 	$path = $_SESSION['group'];
				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				include "db_connect.php";
				$sql = "SELECT title FROM cont WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$path'";
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()){
					echo $row["title"]."<br>";
				}
			?>" name="title" required><br>
			<input type="text" class="inputs2" id="inputs2" value="
			<?php
				error_reporting(0);
			 	$path = $_SESSION['group'];
				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				include "db_connect.php";
				$sql = "SELECT location FROM cont WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$path'";
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()){
					echo $row["location"]."<br>";
				}
			?>" name="location" required><br>
			<label class="label">Project Background:</label><br><textarea class="text1" id="text1" name="background">
				<?php
				error_reporting(0);
			 	$path = $_SESSION['group'];
				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				include "db_connect.php";
				$sql = "SELECT background FROM cont WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$path'";
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()){
					echo $row["background"]."<br>";
				}
			?>
			</textarea><br>
			<label class="label">Project Statement:</label><br><textarea class="text2" id="text2" name="statement">
				<?php
				error_reporting(0);
			 	$path = $_SESSION['group'];
				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				include "db_connect.php";
				$sql = "SELECT statement FROM cont WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$path'";
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()){
					echo $row["statement"]."<br>";
				}
			?>
			</textarea><br>
			<label class="label">Project Target:</label><br><textarea class="text3" id="text3" name="target">
				<?php
				error_reporting(0);
			 	$path = $_SESSION['group'];
				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				include "db_connect.php";
				$sql = "SELECT target FROM cont WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$path'";
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()){
					echo $row["target"]."<br>";
				}
			?>
			</textarea><br>
			<label class="label">Project Objectives:</label><br><textarea class="text4" id="text4" name="objectives">
				<?php
				error_reporting(0);
			 	$path = $_SESSION['group'];
				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				include "db_connect.php";
				$sql = "SELECT objectives FROM cont WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$path'";
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()){
					echo $row["objectives"]."<br>";
				}
			?>
			</textarea><br>
			<label class="label">Project Achievements:</label><br><textarea class="text5" id="text5" name="achievements">
				<?php
				error_reporting(0);
			 	$path = $_SESSION['group'];
				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				include "db_connect.php";
				$sql = "SELECT achievements FROM cont WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$path'";
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()){
					echo $row["achievements"]."<br>";
				}
			?>
			</textarea><br>
			<label class="label">Problems Faced:</label><br><textarea class="text6" id="text6" name="problems">
				<?php
				error_reporting(0);
			 	$path = $_SESSION['group'];
				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				include "db_connect.php";
				$sql = "SELECT problems FROM cont WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$path'";
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()){
					echo $row["problems"]."<br>";
				}
			?>
			</textarea><br>
			<label class="label">Solutions:</label><br><textarea class="text7" id="text7" name="solutions">
				<?php
				error_reporting(0);
			 	$path = $_SESSION['group'];
				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				include "db_connect.php";
				$sql = "SELECT solutions FROM cont WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$path'";
				$result = mysqli_query($conn, $sql);
				while ($row = $result->fetch_assoc()){
					echo $row["solutions"]."<br>";
				}
			?>
			
			</textarea><br>
			<input type="submit" class="submit" id="submit" value="Continue to edit your project" name="submit">
		</form>
		
	</div>
	
	<footer class="footer">
		<div class="copy" id="para1">
			<a href="#" class="para1" id="para12">Copyright &copy; 2023 | All Rights Reserved</a>
			<a href="#" class="para2" id="para12">Designed and developed by <span class="orange1" id="orange1">Web2</span></a>
		</div>
		<div class="line3" id="line3"></div>
		<div class="conts">
			<p class="para1" id="para1">Contact Us; Whatsapp : +(256)-757-185-648<br>Email Us at ronapyto@outlook.com</p>
		</div>
	</footer>
</body>
</html>
<!-- God forbid -->


<?php

if(isset($_POST['submit'])){

	echo "<script>alert('On this page, you shall see empty fields, copy text from the preview page incase you want to repeat the same text. You can move from page to page throught the Review link at the top');location.href='projecont.php';</script>";
}


?>