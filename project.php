<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Projects</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		.body{
			background: linear-gradient(white, rgba(0, 0, 0, 0.5), #1876f2);
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
		.logo{
			width: 5em;
			height: auto;
			position: fixed;
			margin-top: 2em;
			margin-left: 7em;
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
			text-align: right;
			margin-right: 1em;
			background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
			height: 19.7em;
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
			margin-left: 42em;
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
			margin-left: 67em;
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
			margin-left: 47em;
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
			margin-top: 4em;
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

		.extra_img{
			margin-left: 1em;
			display: block;
			position: relative;
			padding: .8em;
			width: 23em;
			height: 24em;
			border-radius: .5em;
			margin-top: .8em;
			margin-right: 0;
		}
		.extra_i{
			margin-top: 1em;
			border-radius: .5em;
			width: 23em;
			height: 23em;
			position: absolute;
/*			transform: rotate(90deg);*/
		}
		.extra_{
			margin-top: 1em;
			border-radius: .5em;
			width: 23em;
			height: 23em;
			position: absolute;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			
			$("#line").css("width", "100%");
			$("#line3").css("width", "100%");
			$("#orange").css("color", "orange");
			$("#orange1").css("color", "orange");
			$("#line2").css("width", "23em");
			$("#para").fadeIn(4000);
			$("#para1").fadeIn(4000);
			$("#stu").on("click", function(){
				alert('Ensure to spell your credentials correctly i.e. class, stream!');
				window.location.href = "projectnew.php";
			})
			$("#teach").on("click", function(){
				alert("Here, you'll be able to make changes to your project in cases where you had not completed due to some reasons like incomplete work");
				window.location.href = "projectcont.php";
			});

			$("#slideshow > img:gt(0)").hide();
			setInterval(function() { $('#slideshow > img:first') .fadeOut(1500) .next() .fadeIn(1500) .end() .appendTo('#slideshow'); }, 3000);
		})
	</script>
</head>
<body class="body">
	<nav class="navbar">
		<nav class="navs">
			<img src="images/logo.png" class="logo">
			<nav id="nav2">
				<a href="index.php">Home</a>
				<a href="student.php" class="tagt">Student</a>
				<a href="project.php" class="tago">Projects</a>
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
	<div style="display: flex;">
		<div class="extra_img" id="slideshow">
			<img src="images/proje1.jpg" class="extra_i">
			<img src="images/proje2.jpg" class="extra_i">
			<img src="images/next1.jpg" class="extra_i">
			<img src="images/other.jpg" class="extra_i">
		</div>
	<div class="head">
		<div id="head">
			<p class="heading" id="heading">
				Need to do your <span class="orange" id="orange">Projects</span>
			</p>
			<p class="line2" id="line2"></p>
		</div>
		<div class="notes">
			<p class="para" id="para" style="margin-left: 5em;">
				In this section, the system will help you come up with problem<br>solving ideas that will help you develop interesting and studious projects<br>that best match the requirements.
			</p>
		</div>
		<div class="links" id="buttons">
		<button id="stu" class="button">New Project</button>
		<button id="teach" class="button1">Old Project</button>
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