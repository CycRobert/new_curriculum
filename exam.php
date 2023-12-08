<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Activities of Intergration</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		.body{
			background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("images/exam.jpg");
			background-repeat: no-repeat;
			background-size: 90em 50em;
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
		.orange2{
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
		.line4{
			border-top: 1px solid white;
			margin-right: 17em;
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
		.para3{
			color: white;
			font-size: 1.2em;
			font-style: italic;
			font: cursive;
			display: none;
		}
		.para5{
			color: white;
			font-size: 1.2em;
			font-style: italic;
			font: cursive;
		}
		.para5:hover{
			cursor: pointer;
			color: orange;
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
		.link{
			display: block;
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
			margin-top: 18em;
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
		#cls{
			display: none;
		}
		.streams{
			margin-left: 1em;
			margin-top: .5em;
			color: white;
			background: none;
			border-radius: .45em;
			font: cursive;
			font-style: italic;
			border-color: white;
			display: none;
		}
		.streams:hover{
			color: white;
			background: orange;
			border-color: white;
			cursor: pointer;
		}
		.inputs1{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			transition: 2s;
		}
		.inputs2{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			transition: 4s;
		}
		.inputs3{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			transition: 7s;
		}
		.input{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
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
			margin-top: 1em;
			width: 0em;
			height: 2.3em;
			color: white;
			border-color: white;
			background: none;
			border-radius: .4em;
			transition: 2s;
		}
		.submit:hover{
			cursor: pointer;
			color: orange;
			background: white;
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
			$("#orange2").css("color", "orange");
			$("#orange1").css("color", "orange");
			$("#line2").css("width", "23em");
			$("#line4").css("width", "23em");
			$("#para").fadeIn(4000);
			$("#para3").fadeIn(4000);
			$("#para1").fadeIn(4000);
			$("#inputs1").css("width", "25em");
			$("#inputs2").css("width", "25em");
			$("#inputs3").css("width", "25em");
			$("#input").css("width", "11em");
			$("#input1").css("width", "11em");
			$("#submit").css("width", "25em");
			$("#stu").on("click", function(){
				window.location.href = "exam.php";
			})
			
		})
	</script>
</head>
<body class="body" id="body">
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
				<a href="#" class="tagf">Results</a>
			</nav>
		</nav>
			<div class="tags">
				<div class="tag1" id="tag1"></div>
				<div class="tag2" id="tag2"></div>
				<div class="tag3" id="tag3"></div>
			</div>
		<div class="line1" id="line"></div>
		<div class="empty"></div>
	</nav>
	<div class="head">
		<div id="head">
			<p class="heading" id="heading">
				Activities of <span class="orange" id="orange">Intergration</span>
			</p>
			<p class="line2" id="line2"></p>
		</div>
		<div class="notes">
			<p class="para" id="para">
				Ease of use with our system for the activities of intergration<br>as the activites are conviniently handled on this site. <span class="orange" id="orange">Please Note</span> that you should<br>continuously save the information to avoid any data losses in case of<br>a power outage.
			</p>
		</div>
	</div>

	<div class="link">
		<p class="para3" id="para3">Start activity <span class="orange2" id="orange2">now</span></p>
		<p class="line4" id="line4"></p>
		<div class="form">
			<div class="parts" id="parts">
				<form method="post">
					<input type="text" name="groupname" id="inputs1" class="inputs1" placeholder="Group Name" required><br>
					<input type="text" name="subject" id="inputs2" class="inputs2" placeholder="Subject"><br>
					<input type="text" name="cls" id="input" class="input" placeholder="Class i.e. S1 or S2" required>
					<input type="text" name="stream" id="input1" class="input1" placeholder="Stream i.e. South" required><br>
					<input type="text" name="members" id="inputs3" class="inputs3" placeholder="Student Name" required><br>
					<input type="submit" class="submit" id="submit" value="Continue" name="submit">
				</form>
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
	
	if(isset($_POST['submit'])){
		$_SESSION['group'] = $_POST['groupname'];
		$_SESSION['subject'] = $_POST['subject'];
		$_SESSION['class'] = $_POST['cls'];
		$_SESSION['stream'] = $_POST['stream'];
		$_SESSION['leader'] = $_POST['members'];

		echo "<script>alert('Ensure that you have spelt everything you have entered correctly'); location.href='examcont.php';</script>";
	}

?>