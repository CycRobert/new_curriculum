<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Log In</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		.body{
			background: linear-gradient(rgba(0, 0, 0, 0.15), black);
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
		.label{
			color: white;
			font-size: 1.2em;
			margin-top: 2em;
			margin-left: 30em;
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
			margin-top: 6em;
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
			margin-left: 2em;
			transition: 2s;
		}
		.inputs2{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 2em;
			transition: 4s;
		}
		.inputs3{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 5em;
			transition: 7s;
		}
		.input11{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 2em;
			transition: 7s;
		}
		.input{
			margin-top: 1em;
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 2em;
			transition: 1s;
		}
		.input1{
			width: 0em;
			height: 2.2em;
			border-radius: .4em;
			border-color: white;
			margin-left: 2em;
			transition: 2s;
		}
		.submit{
			margin-left: 5em;
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
		ul{
			list-style: none;
		}
		.classes{
			display: none;
		}
		.cla{
			margin-top: .5em;
			color: default;
			background: white;
			width: 10em;
			border-radius: .3em;
			border-color: white;
		}
		.cla:hover{
			background: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3));
			color: white;
			cursor: pointer;
		}
		ul li:hover .classes{
			margin-left: 5em;
			background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
			position: absolute;
			width: 15em;
			padding-left: 1em;
			display: block;
		}
		.parts{
			padding: 1em;
			width: 34rem;
			height: auto;
			background: linear-gradient(rgba(0, 0, 0, 0.2), darkgrey);
			margin-left: 22em;
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
			$("#inputs1").css("width", "25em");
			$("#inputs11").css("width", "25em");
			$("#inputs12").css("width", "25em");
			$("#inputs123").css("width", "25em");
			$("#inputs2").css("width", "25em");
			$("#inputs3").css("width", "25em");
			$("#input").css("width", "25em");
			$("#input1").css("width", "25em");
			$("#submit").css("width", "25em");
			$("#para1").fadeIn(4000);
			$("#stu").on("click", function(){
				window.location.href = "projectnew.php"
			})
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
				<a href="init.php" class="tago">Teacher</a>
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
	<div class="head">
		<div id="head">
			<p class="heading" id="heading">
				Log In to your <span class="orange" id="orange">account</span>
			</p>
			<p class="line2" id="line2"></p>
		</div>
		<div class="notes">
			<p class="para" id="para">
				In this section, the system requires your information regarding<br>the subject you teach, your names class and stream to<br>give you a better experience.
			</p>
		</div>
	</div>
	<h1 class="h11">Identify your names, class and subject</h1>
	<div class="parts" id="parts">
		<form method="post">
				<ul>
					<li><input type="text" name="cls" id="input" class="input" value="<?php 
						error_reporting(0);
						if(isset($_POST['classes'])){
							$_SESSION['tmp_class'] = $_POST['classes'];
							echo $_SESSION['tmp_class'];
						}
						else{
							echo $_SESSION['tmp_class'];
						}

					 ?>" placeholder="Class i.e. S1 or S2">
						<div class="classes">
							<input type="submit" name="classes" class="cla" value="S1"><br>
							<input type="submit" name="classes" class="cla" value="S2"><br>
							<input type="submit" name="classes" class="cla" value="S3"><br>
							<input type="submit" name="classes" class="cla" value="S4"><br>
						</div>
					</li>
				</ul>
				<ul>
					<li><input type="text" name="stream" id="input1" class="input1" value="<?php 
						error_reporting(0);
						if(isset($_POST['streams'])){
							$_SESSION['tmp_stream'] = $_POST['streams'];
							echo $_SESSION['tmp_stream'];
						}
						else{
							echo $_SESSION['tmp_stream'];
						}

					 ?>" placeholder="Stream i.e. South">
						<div class="classes">
							<input type="submit" name="streams" class="cla" value="South"><br>
							<input type="submit" name="streams" class="cla" value="Central"><br>
							<input type="submit" name="streams" class="cla" value="East"><br>
							<input type="submit" name="streams" class="cla" value="West"><br>
							<input type="submit" name="streams" class="cla" value="North"><br>
						</div>
					</li>
				</ul>
				<ul>
					<li><input type="text" name="subject" id="inputs2" value="<?php 
						error_reporting(0);
						if(isset($_POST['_subject'])){
							$_SESSION['tmp_sub'] = $_POST['_subject'];
							echo $_SESSION['tmp_sub'];
						}
						else{
							echo $_SESSION['tmp_sub'];
						}?>" class="inputs2" placeholder="Subject">
						<div class="classes">
							<input type="submit" name="_subject" class="cla" value="Physics"><br>
							<input type="submit" name="_subject" class="cla" value="Boilogy"><br>
							<input type="submit" name="_subject" class="cla" value="Chemistry"><br>
							<input type="submit" name="_subject" class="cla" value="Mathematics"><br>
							<input type="submit" name="_subject" class="cla" value="English"><br>
							<input type="submit" name="_subject" class="cla" value="Agriculture"><br>
							<input type="submit" name="_subject" class="cla" value="History"><br>
							<input type="submit" name="_subject" class="cla" value="Geography"><br>
							<input type="submit" name="_subject" class="cla" value="Kiswahili"><br>
							<input type="submit" name="_subject" class="cla" value="Entreprenuership"><br>
							<input type="submit" name="_subject" class="cla" value="CRE"><br>
							<input type="submit" name="_subject" class="cla" value="IRE"><br>
							<input type="submit" name="_subject" class="cla" value="PE"><br>
						</div>
					</li>
				</ul>
				<ul>
					<li><input type="text" name="fname" id="inputs1" value="<?php 
						error_reporting(0);
						if(isset($_POST['f_name'])){
							$_SESSION['tmp_f'] = $_POST['f_name'];
							echo $_SESSION['tmp_f'];
						}
						else{
							echo $_SESSION['tmp_f'];
						}?>" class="inputs1" placeholder="First Name">
						<div class="classes">
							<?php
							// error_reporting(0);

								include "db_connect.php";

								$class = $_POST['cls'];
								$stream = $_POST['stream'];

								$sql = "SELECT fname FROM teachers WHERE form = '$class' AND stream = '$stream'";
								$result = mysqli_query($conn, $sql);
								while($row = $result->fetch_assoc()){
									echo "<input type='submit' name='f_name' class='cla' value='".$row['fname']."'><br>";
								}
							?>
						</div>
					</li>
				</ul>
				<ul>
					<li><input type="text" name="lname" id="inputs11" class="input11" value="<?php 
						error_reporting(0);
						if(isset($_POST['l'])){
							$_SESSION['tmp_l'] = $_POST['l'];
							echo $_SESSION['tmp_l'];
						}
						else{
							echo $_SESSION['tmp_l'];
						}?>" class="inputs1" placeholder="Last Name">
						<div class="classes">
							<?php
							// error_reporting(0);

								include "db_connect.php";

								$class = $_POST['cls'];
								$stream = $_POST['stream'];

								$sql = "SELECT lname FROM teachers WHERE form = '$class' AND stream = '$stream'";
								$result = mysqli_query($conn, $sql);
								while($row = $result->fetch_assoc()){
									echo "<input type='submit' name='l' class='cla' value='".$row['lname']."'><br>";
								}
							?>
						</div>
					</li>
				</ul>
				
				
				<input type="password" name="pass" class="inputs3" id="inputs3" placeholder="Password"><br>
			<input type="submit" class="submit" id="submit" value="Continue" name="submit">
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

	include "db_connect.php";

	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$subject = $_POST['subject'];
	$class = $_POST['cls'];
	$stream = $_POST['stream'];
	$password = $_POST['pass']; 

	if(isset($_POST['submit'])){
		$sql = "SELECT password FROM teachers WHERE password = '$password' AND fname = '$fname' AND form = '$class'";
		
		$result = mysqli_query($conn, $sql);
		while($row = $result->fetch_assoc()){
			$_SESSION['fname'] = $fname;
			$_SESSION['lname'] = $lname;
			$_SESSION['subject'] = $subject;
			$_SESSION['class'] = $class;
			$_SESSION['stream'] = $stream;
			$_SESSION['password'] = $password;
			echo "<script>alert('Log In successful'); location.href='homet.php';</script>";
		}

		
	}



?>