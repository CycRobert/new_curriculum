<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Wecome teacher</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		body{
			background: linear-gradient(rgba(0, 0, 0, 0.2), black);
			font: cursive;
			font-style: italic;
			margin: 0;
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
		#nav2 a{
			color: white;
			text-decoration: none;
			font:cursive;
			font-style: italic;
			font-size: .8em;
			margin-left: .5em;
			border: 1px solid white;
			padding: .2em;
			border-radius: .4em; 
		}
		#nav2 a:hover{
			color: orange;
			background: white;
		}
		#nav2{
			margin-left:60em;
		}
		.logo{
			width: 5em;
			height: auto;
			position: fixed;
			margin-top: 2em;
			margin-left: 7em;
		}
		.tago{
			background: orange;
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
			margin-top: 10em;
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
		.panel{
			display: flex;
			margin-left: 1em;
			margin-top: 4em;
		}
		.dash1{
			background: linear-gradient(white, rgba(0, 0, 0, 0.7));
			width: 37em;
			height: 20em;
			border-radius: .4em;
			margin-left: 1.5em;
		}
		.dash2{
			margin-left: 2em;
			background: linear-gradient(white, rgba(0, 0, 0, 0.7));
			width: 39em;
			height: 20em;
			border-radius: .4em;
		}
		.profile{
			display: flex;
		}
		.proimg{
			margin-top: .6em;
			margin-left: .6em;
			width: 6em;
			height: 6.3em;
		}
		.label{
			margin-left: .5em;
			margin-top: .6em;
		}
		.pro{
			margin-top: 2em;
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
		.proline{
			border-top: 1px solid black;
			margin-left: 1em;
			width: 0em;
			transition: 2s;
		}
		.proline1{
			border-top: 1px solid black;
			margin-left: 1em;
			margin-top: 4em;
			width: 0em;
			transition: 2s;
		}
		.butt1{
			margin-left: 2em;
			margin-top: 1.5em;
			border-radius: .4em;
			width: 10em;
			height: 2em;
			transition: 1s;
		}

		.butt11{
			margin-left: 2em;
			margin-top: 1.5em;
			border-radius: .4em;
			width: 15em;
			height: 2em;
			transition: 1s;
		}
		.butt1:hover{
			cursor: pointer;
			color: white;
			background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35));
		}
		.butt11:hover{
			cursor: pointer;
			color: white;
			background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35));
		}
		.butt2{
			margin-left: 1em;
			margin-top: 1.5em;
			border-radius: .4em;
			width: 10em;
			height: 2em;
			transition: 1s;
		}
		.butt2:hover{
			cursor: pointer;
			color: white;
			background: linear-gradient(rgba(0, 0, 0, 0.35), rgba(0, 0, 0, 0.35));
		}
		h2{
			text-align: center;
			margin-top: 1.5em;
			margin-bottom: 1.5em;
			color: black;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			alert("Welcome to your dashboard, here you can mark projects and even download the results");
			
			$("#line").css("width", "100%");
			$("#line3").css("width", "100%");
			$("#orange").css("color", "orange");
			$("#orange1").css("color", "orange");
			$("#line2").css("width", "23em");
			$("#para").fadeIn(4000);
			$("#para1").fadeIn(4000);
			$("#proline").css("width", "30em");
			$("#proline1").css("width", "30em");
			$(".tago").on("click", function(){
				alert("Are sure you want to leave this page!");
			});
			$("#marked").on("click", function(){
				window.location.href = "results.php";
			})
			$(".tagt").on("click", function(){
				alert("Sorry, this page is reserved ony for students!, access denied for teachers");
				location.href="homet.php";
			})
			$("#groups").on("click", function(){
				location.href="insertg.php";
			})
			$("#names").on("click", function(){
				location.href="insertn.php";
			})
			$("#markp").on("click", function(){
				location.href="markp.php";
			})
			
			$("#destroy").on("click", function(){
				alert("You have successfully logged out, thank you");
				window.location.href="index.php";
			})

		});
	</script>
</head>
<body>
	<nav class="navbar">
		<nav class="navs">
			<img src="images/logo.png" class="logo">
			<nav id="nav2">
				<a href="index.php">Home</a>
				<a href="student.php" class="tagt">Student</a>
				<a href="homet.php" class="tago">Teacher</a>
				<a href="#" class="tagf">Results</a>
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

	
	<div class="panel">
		<div class="dash1">
			<div class="profile">
				<img src="images/profile1.png" class = "proimg">
				<div class="pro">
					<?php error_reporting(0); $pro_fname=$_SESSION['fname'];$pro_lname=$_SESSION['lname'];$pro_subject=$_SESSION['subject'];$pro_class=$_SESSION['class'];$pro_stream=$_SESSION['stream'];//echo the profile
					echo "<label class='label'>Tr. ".$pro_fname."</label><label style='margin-left: .6em;'>".$pro_lname."</label><br><label class='label'>".$pro_class."</label>.<label style='margin-left: .6em;'>".$pro_stream."</label><br><label class='label'>".$pro_subject."</label><br>"; ?>
				</div>
				
			</div>
			<p class="proline" id="proline"></p>
			<div class="finished">
				<button class="butt1" id="marked">View Results</button>
				<a href="download.php"><button class="butt2" id="download">Download results</button></a>
				<form method="post">
					<input type="button" name="logout" id="destroy" class="butt1" value = "Log Out">
				</form>
			</div>
		</div>
		<div class="dash2">
			<h2>Students Control Panel</h2>
			<p class="proline1" id="proline1"></p>
			<div class="add">
				<button class="butt11" id="groups">Insert Groups And Students</button>
				<button class="butt1" id="markp">Mark 	Projects</button>
			</div>	
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

	if(isset($_POST['logout'])){
		session_destroy();
		echo "<scipt>alert('You have been logged out, thank you');location.href = 'index.php';</script>";
	}else{

	}

?>