<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mark Projects</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		body{
			background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.9));
			font: cursive;
			font-style: italic;
			margin: 0;
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
			margin-left: 3em;
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
		.select{
			background: white;
			width: 20em;
			height: auto;
			margin-top: 1em;
			margin-left: 2em;
		}
		.panel{
			display: flex;
			margin-left: 1em;
			margin-top: 4em;
		}
		.dash1{
			background: linear-gradient(whitesmoke, rgba(0, 0, 0, 0.6));
			width: 30em;
			height: auto;
			border-radius: .4em;
			margin-left: 2em;
		}
		.dash2{
			margin-left: 1em;
			background: linear-gradient(whitesmoke, rgba(0, 0, 0, 0.6));
			width: auto;
			height: auto;
			border-radius: .4em;
		}
		h2{
			text-align: center;
			margin-top: 1.5em;
			margin-bottom: 1.5em;
			color: black;
		}
		textarea{
			width: 20em;
		}
		.groups{
			width: 15em;
			height: 2em;
			border-radius: .4em;
			margin-left: 2em;
			margin-top: 1em;
			transition: 1s;
		}
		.groups:hover{
			cursor: pointer;
			width: 16em;
			height: 2.1em;
		}
		.proline1{
			border-top: 1px solid black;
			margin-left: 1em;
			margin-top: 1em;
			width: 0em;
			transition: 2s;
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
			margin-left: 1em;
			border: 1px solid darkgrey;
		}
		#row1{
			background: linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25));
		}
		table tr td:hover{
			background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
		}
		.submitted{
			width: 10em;
			height: 1.4em;
		}
		
		table{
			margin-left: .4em;
			border-collapse: collapse;
		}
		table tr{
			margin-left: 30em;
			border-right: 1px solid black;
			border-bottom: 1px solid black;
		}
		table tr th{
			background: orange;
			padding: .8em;
			width: 10em;
			border: 1px solid orange;
		}
		.img{
			width: 17em;
			height: 12em;
			border-radius: .4em;
			margin-top: .6em;
			margin-left: .5em;
		}
		.submit{
			margin-left: 38em;
			margin-top: 5em;
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
		.ins{
			width: 4em;
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
			$("#proline").css("width", "40em");
			$("#proline1").css("width", "40em");
			$("#submit").css("width", "35em");
		})
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
				<a href="homet.php" class="tagf">Back</a>
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
	<h1 class="h11">Select group to mark</h1>
	<div class="panel">
		<div class="dash1">
			
			<?php 

				error_reporting(0);

				include "db_connect.php";

				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				$sql = "SELECT groupname FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream'";
				$result = mysqli_query($conn, $sql);
				echo "<div style='height: 10em; overflow: auto; '>";
				while($row = $result->fetch_assoc()){
					echo "<form method='post'>";
					echo "<input type='submit' name='groups' class='groups' value='".$row['groupname']."'><br>";
					echo "</form>";
				}
				echo "</div>";

			 ?>
	
		<div>
			<h1 style="margin-left: 2em;margin-top: 2em;">Marked Groups</h1>
			<?php 

				error_reporting(0);

				include "db_connect.php";

				$class = $_SESSION['class'];
				$subject = $_SESSION['subject'];
				$stream = $_SESSION['stream'];

				$sql = "SELECT gname FROM results WHERE form = '$class' AND subject = '$subject' AND stream = '$stream'";
				$result = mysqli_query($conn, $sql);
				while($row = $result->fetch_assoc()){
					echo "<label style='margin-left:2em;margin-top: 1em; font-weight: bold;'>".$row['gname']."</label><br>";
				}

			 ?>
		</div>
	</div>
		<div class="dash2">
			<h2>Mark <?php 

					include "db_connect.php";
					$group = $_POST['groups'];
					 echo "<span style='color:orange;'>".$group."</span>";

		?></h2>
		<p class="proline1" id="proline1"></p>
			<form method="post">
				<table>
					<tr>
						<th>Section</th>
						<th>Value</th>
						<th>Marks</th>
					</tr>
					<tr>
						<td><b><i>Project Title</i></b></td>
						<td>
						<?php

							include "db_connect.php";

							$group = $_POST['groups'];
							$class = $_SESSION['class'];
							$subject = $_SESSION['subject'];
							$stream = $_SESSION['stream'];

							$sql = "SELECT title FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
							$result = mysqli_query($conn, $sql);
							while($row = $result->fetch_assoc()){
								echo "<input type='text' name='title' value='".$row['title']."'>";
							}

						?>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark1" class="marks"></td>
					</tr>
					<tr id="row1">
						<td><b><i>Project Location</i></b></td>
						<td>
						<?php

							include "db_connect.php";

							$group = $_POST['groups'];
							$class = $_SESSION['class'];
							$subject = $_SESSION['subject'];
							$stream = $_SESSION['stream'];

							$sql = "SELECT location FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
							$result = mysqli_query($conn, $sql);
							while($row = $result->fetch_assoc()){
								echo "<input type='text' name='location' value='".$row['location']."''>";
							}

						?>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark2" class="marks"></td>
					</tr>
					<tr>
						<td><b><i>Project Background</i></b></td>
						<td>
						<?php

							include "db_connect.php";

							$group = $_POST['groups'];
							$class = $_SESSION['class'];
							$subject = $_SESSION['subject'];
							$stream = $_SESSION['stream'];

							$sql = "SELECT background FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
							$result = mysqli_query($conn, $sql);
							while($row = $result->fetch_assoc()){
								echo "<textarea name='background'>".$row['background']."</textarea>";
							}

						?>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark3" class="marks"></td>
					</tr>
					<tr id="row1">
						<td><b><i>Project Statement</i></b></td>
						<td>
						<?php

							include "db_connect.php";

							$group = $_POST['groups'];
							$class = $_SESSION['class'];
							$subject = $_SESSION['subject'];
							$stream = $_SESSION['stream'];

							$sql = "SELECT statement FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
							$result = mysqli_query($conn, $sql);
							while($row = $result->fetch_assoc()){
								echo "<textarea name='statement'>".$row['statement']."</textarea>";
							}

						?>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark4" class="marks"></td>
					</tr>
					<tr>
						<td><b><i>Project Objectives</i></b></td>
						<td>
						<?php

							include "db_connect.php";

							$group = $_POST['groups'];
							$class = $_SESSION['class'];
							$subject = $_SESSION['subject'];
							$stream = $_SESSION['stream'];

							$sql = "SELECT objectives FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
							$result = mysqli_query($conn, $sql);
							while($row = $result->fetch_assoc()){
								echo "<textarea name='objectives'>".$row['objectives']."</textarea>";
							}

						?>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark5" class="marks"></td>
					</tr>
					<tr id="row1">
						<td><b><i>Project Target</i></b></td>
						<td>
						<?php

							include "db_connect.php";

							$group = $_POST['groups'];
							$class = $_SESSION['class'];
							$subject = $_SESSION['subject'];
							$stream = $_SESSION['stream'];

							$sql = "SELECT target FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
							$result = mysqli_query($conn, $sql);
							while($row = $result->fetch_assoc()){
								echo "<textarea name='target'>".$row['target']."</textarea>";
							}

						?>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark6" class="marks"></td>
					</tr>
					<tr>
						<td><b><i>Project Achievements</i></b></td>
						<td>
						<?php

							include "db_connect.php";

							$group = $_POST['groups'];
							$class = $_SESSION['class'];
							$subject = $_SESSION['subject'];
							$stream = $_SESSION['stream'];

							$sql = "SELECT achievements FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
							$result = mysqli_query($conn, $sql);
							while($row = $result->fetch_assoc()){
								echo "<textarea name='achievements'>".$row['achievements']."</textarea>";
							}

						?>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark7" class="marks"></td>
					</tr>
					<tr id="row1">
						<td><b><i>Problems Faced</i></b></td>
						<td>
						<?php

							include "db_connect.php";

							$group = $_POST['groups'];
							$class = $_SESSION['class'];
							$subject = $_SESSION['subject'];
							$stream = $_SESSION['stream'];

							$sql = "SELECT problems FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
							$result = mysqli_query($conn, $sql);
							while($row = $result->fetch_assoc()){
								echo "<textarea name='problems'>".$row['problems']."</textarea>";
							}

						?>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark8" class="marks"></td>
					</tr>
					<tr>
						<td><b><i>Problem Solutions</i></b></td>
						<td>
						<?php

							include "db_connect.php";

							$group = $_POST['groups'];
							$class = $_SESSION['class'];
							$subject = $_SESSION['subject'];
							$stream = $_SESSION['stream'];

							$sql = "SELECT solutions FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
							$result = mysqli_query($conn, $sql);
							while($row = $result->fetch_assoc()){
								echo "<textarea name='solutions'>".$row['solutions']."</textarea>";
							}

						?>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark9" class="marks"></td>
					</tr>
					<tr id="row1">
						<td><b><i>Project Budget</i></b></td>
						<td>
							<table>
								<tr>
									<th>Items</th>
									<th>Quantity</th>
									<th>Cost</th>
									<th>Total Cost</th>
								</tr>
								<tr>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT itemo FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='text' name='itemo' class='ins' value='".$row['itemo']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT amounto FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='amounto' class='ins' value='".$row['amounto']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT costo FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='costo' class='ins' value='".$row['costo']."'>";
											}

										?>
									</td>
									<td></td>
								</tr>
								<tr style="background: white;">
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT itemt FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='text' name='itemt' class='ins' value='".$row['itemt']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT amountt FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='amountt' class='ins' value='".$row['amountt']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT costt FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='costt' class='ins' value='".$row['costt']."'>";
											}

										?>
									</td>
									<td></td>
								</tr>
								<tr>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT itemth FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='text' name='itemth' class='ins' value='".$row['itemth']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT amountth FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='amountth' class='ins' value='".$row['amountth']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT costth FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='costth' class='ins' value='".$row['costth']."'>";
											}

										?>
									</td>
									<td></td>
								</tr>
								<tr style="background: white;">
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT itemf FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='text' name='itemf' class='ins' value='".$row['itemf']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT amountf FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='amountf' class='ins' value='".$row['amountf']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT costf FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='costf' class='ins' value='".$row['costf']."'>";
											}

										?>
									</td>
									<td></td>
								</tr>
								<tr>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT itemfv FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='text' name='itemfv' class='ins' value='".$row['itemfv']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT amountfv FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='amountfv' class='ins' value='".$row['amountfv']."'>";
											}

										?>
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT costfv FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='costfv' class='ins' value='".$row['costfv']."'>";
											}

										?>
									</td>
									<td></td>
								</tr>
								<tr style="background: white;">
									<td>
										
									</td>
									<td>
										
									</td>
									<td>
										
									</td>
									<td>
										<?php 

											include "db_connect.php";
											error_reporting(0);

											$group = $_POST['groups'];
											$class = $_SESSION['class'];
											$subject = $_SESSION['subject'];
											$stream = $_SESSION['stream'];

											$sql = "SELECT total_bud FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
											$result = mysqli_query($conn, $sql);
											while($row = $result->fetch_assoc()){
												echo "<input type='number' name='total' class='ins' value='".$row['total']."'>";
											}

										?>
									</td>
								</tr>
							</table>
						</td>
						<td><input type="number" placeholder="Add Marks" name="mark10" class="marks"></td>
					</tr>
					<tr>
						<td><b><i>Image Summary</i></b></td>
						<td>
							<?php

								include "db_connect.php";

								error_reporting(0);

								$group = $_POST['groups'];
								$class = $_SESSION['class'];
								$subject = $_SESSION['subject'];
								$stream = $_SESSION['stream'];

								$sql = "SELECT uploads FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
								$result = mysqli_query($conn, $sql);
								while($row = $result->fetch_assoc()){
									echo "<img class='img' src='{$row['uploads']}'>";
								}

							?>
						</td>
						<td><input type="number" placeholder="Add marks" name="mark11"></td>
					</tr>
				</table><br><br>
				
			
		</div>
		</div>
		<input style="margin-left: 2em; margin-top: 1em;" type="text" name="groupname"  value="<?php

								include "db_connect.php";

								error_reporting(0);

								$group = $_POST['groups'];
								$class = $_SESSION['class'];
								$subject = $_SESSION['subject'];
								$stream = $_SESSION['stream'];

								$sql = "SELECT groupname FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
								$result = mysqli_query($conn, $sql);
								while($row = $result->fetch_assoc()){
									echo $row['groupname'];
								}

							?>"><br>
							<textarea style="margin-left: 2em;" name="groupmembers"><?php

								include "db_connect.php";

								error_reporting(0);

								$group = $_POST['groups'];
								$class = $_SESSION['class'];
								$subject = $_SESSION['subject'];
								$stream = $_SESSION['stream'];

								$sql = "SELECT groupmembers FROM submitted WHERE form = '$class' AND subject = '$subject' AND stream = '$stream' AND groupname = '$group'";
								$result = mysqli_query($conn, $sql);
								while($row = $result->fetch_assoc()){
									echo $row['groupmembers'];
								}

							?></textarea>
		<input type="submit" class="submit" id="submit" value="Mark <?php 

				error_reporting(0);
				$group = $_POST['groups'];
				echo $group;

			 ?>" name="submit">
	</form>


	

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

	
	include "db_connect.php";

	// error_reporting(0);

	$mark1 = $_POST['mark1'];
	$mark2 = $_POST['mark2'];
	$mark3 = $_POST['mark3'];
	$mark4 = $_POST['mark4'];
	$mark5 = $_POST['mark5'];
	$mark6 = $_POST['mark6'];
	$mark7 = $_POST['mark7'];
	$mark8 = $_POST['mark8'];
	$mark9 = $_POST['mark9'];
	$mark10 = $_POST['mark10'];
	$mark11 = $_POST['mark11'];

	//simplify the marks

	$smark1 = $mark1/11;
	$smark2 = $mark2/11;
	$smark3 = $mark3/11;
	$smark4 = $mark4/11;
	$smark5 = $mark5/11;
	$smark6 = $mark6/11;
	$smark7 = $mark7/11;
	$smark8 = $mark8/11;
	$smark9 = $mark9/11;
	$smark10 = $mark10/11;
	$smark11 = $mark11/11;

	$total_marks = $smark1+$smark2+$smark3+$smark4+$smark5+$smark6+$smark7+$smark8+$smark9+$smark10+$smark11;

	$group = $_POST['groupname'];
	$groupmembers = $_POST['groupmembers'];

	//group members

	$class = $_SESSION['class'];
	$subject = $_SESSION['subject'];
	$stream = $_SESSION['stream'];

	

	

	$tfname = $_SESSION['fname'];
	$tlname = $_SESSION['lname'];

	//now we need to create the project results report

	if(isset($_POST['submit'])){
			$sql = "UPDATE submitted SET marko='$mark1',markt='$mark2',markth='$mark3', markf='$mark4',markfv='$mark5',marks='$mark6',markse='$mark7',markei='$mark8',markn='$mark9',markte='$mark10',markel='$mark11',total = '$total_marks' WHERE form = '$class' AND stream = '$stream' AND subject = '$subject' AND groupname = '$group' ";
		
			if($conn->query($sql) === TRUE){
				echo "<script>alert('Group  marked and project report created');location.href='markp.php'</script>";
			}else{
				echo "<script>alert('Group marked but report not created');location.href='markp.php'</script>";
			}
		}


?>