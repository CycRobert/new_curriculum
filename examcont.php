<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exam</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		.body{
			background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65));
			background-repeat: no-repeat;
			background-size: 90em 90em;
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
		h1{
			text-align: center;
			color: orange;
			font: cursive;
			font-style: italic;
		}
		textarea{
			margin-left: 26em;
			width: 60em;
			height: 38em;
			font: cursive;
			font-style: italic;
			border-radius:.37em;
		}
		input{
			width: 60em;
			height: 2em;
			color: orange;
			background: none;
			border-radius: .4em;
			border-color: orange;
			margin-top: 1em;
			text-align: center;
			margin-left: 26em;
			transition: 1.5s;
		}
		input:hover{
			cursor: pointer;
			color: white;
			background: orange;
		}
		.footer{
			margin-top: 5em;
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
	</style>
	<script type="text/javascript">
		$(document).ready(function () {
			alert("You can only carry this out once, and you cannot exit unless you're done! Proceed.");
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
			$("#cant").on("click", function(){
				alert("Note that you can not go back at this step, this is done to protect your information from loss");
				window.location.href="examcont.php";
			})
			$("#cant1").on("click", function(){
				alert("Note that you can not go back at this step, this is done to protect your information from loss");
				window.location.href="examcont.php";
			})
			$("#cant2").on("click", function(){
				alert("Note that you can not go back at this step, this is done to protect your information from loss");
				window.location.href="examcont.php";
			})
			$("#cant3").on("click", function(){
				alert("Note that you can not go back at this step, this is done to protect your information from loss");
				window.location.href="examcont.php";
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
				<a href="#" id="cant" class="tago">Home</a>
				<a href="#" id="cant1" class="tagt">Student</a>
				<a href="#" id="cant2" class="tagth">Teacher</a>
				<a href="#" id="cant3" class="tagf">Results</a>
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


	<div class="take">
		<h1>Start your assessment</h1>
		<div class="exam">
			<form method="post">
				<textarea name="essay"></textarea><br>
				<input type="submit" name="submit" value="Submit">
			</form>
		</div>
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
	
	$path = $_SESSION['group'];
	$subject = $_SESSION['subject'];
	$class = $_SESSION['class'];
	$stream = $_SESSION['stream'];
	$student_name = $_SESSION['leader'];
	$ess = $_POST['essay'];

	if(isset($_POST['submit'])){
		mkdir('./Exams/'.$class.'/'.$stream.'/'.$subject.'/'.$path);
		mkdir('./Exams/'.$class.'/'.$stream.'/'.$subject.'/'.$path.'/'.$student_name);

		$essay_file = fopen('./Exams/'.$class.'/'.$stream.'/'.$subject.'/'.$path.'/'.$student_name.'/essay.pdf', 'x+');
		if(fwrite($essay_file, $ess)){
			fclose($essay_file);
			echo "<script>alert('Essay submited, thank you!');location.href='index.php';</script>";
		}else{
			echo "<script>alert('Faied to submit essay, try again later');location.href='exam.php';</script>";
		}

	}

?>