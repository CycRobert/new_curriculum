<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		.body{
			background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)), url("images/homie.jpg");
			background-repeat: no-repeat;
			background-size: 90em 50em;
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
		#nav1 a{
			color: white;
			text-decoration: none;
			font:cursive;
			font-style: italic;
			font-size: 1em;
		}
		.tago{
			background: orange;
		}
		.tago:hover{
			background: white;
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
		.logo{
			width: 5em;
			height: auto;
			position: fixed;
			margin-top: 2em;
			margin-left: 7em;
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
			font-size: 2.8em;
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
			margin-left: 27em;
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
			margin-left: 36em;
		}
		.headers{
			width: 100%;
			height: 100%;
			z-index: 999;
			position: absolute;
			background: linear-gradient(rgba(0, 0, 0, 0.87), rgba(0, 0, 0, 0.87));
			display: none;
		}
		.headerlo{
			width: 35em;
			margin-left: 20em;
			position: absolute;
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
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#headers").fadeIn(2000);
			setInterval(() => {$(".headers").fadeOut(2700);
				
			}, 2700);
			$("#line").css("width", "100%");
			$("#line3").css("width", "100%");
			$("#orange").css("color", "orange");
			$("#orange1").css("color", "orange");
			$("#line2").css("width", "33em");
			$("#para").fadeIn(4000);
			$("#para1").fadeIn(4000);
			$("#stu").on("click", function(){
				window.location.href = 'student.php';
			})
			$("#teach").on("click", function(){
				window.location.href="init.php";
			})			
		})
	</script>
</head>
<body class="body">
	<div class="headers" id="headers">
		<div class="hed">
			<img src="images/logo.png" class="headerlo">
		</div>
	</div>
	<nav class="navbar">
		<nav class="navs">
			<img src="images/logo.png" class="logo">
			<nav id="nav2">
				<a href="index.php" class="tago">Home</a>
				<a href="student.php" class="tagt">Student</a>
				<a href="init.php" class="tagth">Teacher</a>
				<a href="results_rev.php" class="tagf">Results</a>
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

	<!-- The contents -->
	<div class="head">
		<div id="head">
			<p class="heading" id="heading">
				KAMULI PROGRESSIVE <span class="orange" id="orange">COLLEGE</span>
			</p>
			<p class="line2" id="line2"></p>
		</div>
		<div class="notes">
			<p class="para" id="para">
				The new secondary education system advanced<br>and enhanced by a fast and covenient scholars<br>assist system.
			</p>
		</div>
	</div>
	<div class="links" id="buttons">
		<button id="stu" class="button">Student</button>
		<button id="teach" class="button1">Teacher</button>
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