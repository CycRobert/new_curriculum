<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Insert Groups</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		body{
			background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35));
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
			margin-left:58em;
		}
		.tags{
			display: flex;
			margin-left: 69.3em;
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
		.footer{
			margin-top: 8em;
			padding-top: 1em;
			padding-bottom: 1em;
			padding-left: 1em;
			padding-right: 1em;
			background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8));
		}
		.h11{
			color: white;
			font-size: 1.5em;
			text-decoration: underline;
			text-align: center;
			margin-top: 2em;
		}
		.copy{
			dispay: flex;
		}
		.copy a{
			text-decoration: none;
			justify-content: space-between;
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
		.head{
			margin-top: 6em;
			text-align: center;
		}
		.heading{
			text-align: center;
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
		.line2{
			border-top: 1px solid white;
			margin-left: 32em;
			width: 0em;
			transition: 4s;
		}
		.panel{
			background: white;
			margin-top: 2em;
			margin-left: 25em;
			width: 40em;
			height: 20em;
			border-radius: .4em;
		}
		.input{
			margin-left: 14em;
			margin-top: 6em;
			width: 20em;
			height: 2em;
			border-radius: .5em;
			font: cursive;
			font-style: italic;
		}
		.submit{
			margin-left: 17em;
			margin-top: 1em;
			width: 15em;
			height: 2em;
			border-radius: .5em;
			color: orange;
			background: ivory;
			border-color: orange;
			transition: 1s;
		}
		.submit:hover{
			color: white;
			background: orange;
			cursor: pointer;
			font: cursive;
			font-style: italic;
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
			$("#para1").fadeIn(4000);
		});
	</script>
</head>
<body>
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
				<a href="homet.php" class="tagth">Back</a>
				<a href="results.php" class="tagf">Results</a>
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
	<div id="head">
		<p class="heading" id="heading">
			Insert <span class="orange" id="orange">new Students</span>
		</p>
		<p class="line2" id="line2"></p>
	</div>
	<div class="panel">
		<form method="post" enctype="multipart/form-data">
			<input type="text" name="new_name" class="input" placeholder="Student Names(full)"><br>
			<input type="submit" name="submit" value="Insert Student" class="submit"> 
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
<?php
	
	error_reporting(0);

	$subject = $_SESSION['subject'];
	$class= $_SESSION['class'];
	$stream = $_SESSION['stream'];

	include 'db_connect.php';

	$new_name = $_POST['new_name'];
	
	if(isset($_POST['submit'])){
		$sql = "INSERT INTO students (names, form, stream, subject) VALUES ('$new_name', '$class', '$stream', '$subject')";
		if($conn->query($sql) === TRUE){
			echo "<script>alert('New Student inserted');</script>";
		}else{
			echo "<script>alert('Something went wrong, please try again');</script>";
		}
	}


?>