<?php

	session_start();

	require_once "vendor/autoload.php";

	use Dompdf\Dompdf;

	$group = $_SESSION['groups'];
	$class = $_SESSION['class'];
	$subject = $_SESSION['subject'];
	$stream = $_SESSION['stream'];

	$pro_fname=$_SESSION['fname'];
	$pro_lname=$_SESSION['lname'];

	include "db_connect.php";

	$first = "SELECT * FROM submitted WHERE groupname = '$group' AND form = '$class' AND subject = '$subject' AND stream = '$stream' ";
	$stmt = mysqli_query($conn,$first);
	$stmt->fetch_assoc();
	$rows = $stmt;

	$html = '


	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View submitted</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		body{
			background: linear-gradient(white, rgba(0, 0, 0, 0.4));
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
			margin-left:50em;
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
			color: black;
			font-size: .97em;
			padding: .4em;
			margin-left: 1em;
			border: 1px solid black;
		}
		
		table tr td:hover{
			background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));
		}
		.submitted{
			width: 10em;
			height: 1.4em;
		}
		textarea{
			height: auto;
		}
		
		table{
			margin-left: 1em;
			border-collapse: collapse;
		}
		table tr{
			margin-left: 3em;
			border-right: 1px solid black;
			border-bottom: 1px solid black;
		}
		table tr th{
			background: orange;
			padding: .8em;
			width: auto;
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
	</head>
<body>';



foreach($rows as $row){
	$html .= '

		<div class="dash2">
		<p style="text-align: center;"><span style="font-size: 1.4em;font-weight: bolder;">KAMULI PROGRESSIVE COLLEGE</span><br><span style="font-size: 1.2em;margin-left: 2em;font-weight: bold;">'.$subject.' PROJECT WORK REPORT</span><br><span style="font-size: 1.15em;margin-left: 3.4em;">'.$class.'.'.$stream.'</span></p>
			<h2 style="font-size: 1em;">Group Name: '.$group.'</h2>
		<p class="proline1" id="proline1"></p>
			
				<table style = "margin-left: 1em;width: auto;padding: 1em;">
					<tr>
						<th>Section</th>
						<th>Value</th>
						<th>Marks</th>
					</tr>
					<tr>
						<td><b><i>Project Title</i></b></td>
						<td>
						'.$row['title'].'
						</td>
						<td>'.$row['marko'].'</td>
					</tr>
					<tr id="row1">
						<td><b><i>Project Location</i></b></td>
						<td>'.$row['location'].'
						</td>
						<td>'.$row['markt'].'</td>
					</tr>
					<tr>
						<td><b><i>Project Background</i></b></td>
						<td>
						<textarea>'.$row['background'].'</textarea>
						</td>
						<td>'.$row['markth'].'</td>
					</tr>
					<tr id="row1">
						<td><b><i>Project Statement</i></b></td>
						<td>
						<textarea>'.$row['statement'].'</textarea>
						</td>
						<td>'.$row['markf'].'</td>
					</tr>
					<tr>
						<td><b><i>Project Objectives</i></b></td>
						<td>
						<textarea>'.$row['objectives'].'</textarea>
						</td>
						<td>'.$row['markfv'].'</td>
					</tr>
					<tr id="row1">
						<td><b><i>Project Target</i></b></td>
						<td><textarea>'.$row['target'].'</textarea>
						</td>
						<td>'.$row['marks'].'</td>
					</tr>
					<tr>
						<td><b><i>Project Achievements</i></b></td>
						<td>
						<textarea>'.$row['achievements'].'</textarea>
						</td>
						<td>'.$row['markse'].'</td>
					</tr>
					<tr id="row1">
						<td><b><i>Problems Faced</i></b></td>
						<td>
						<textarea>'.$row['problems'].'</textarea>
						</td>
						<td>'.$row['markei'].'</td>
					</tr>
					<tr>
						<td><b><i>Problem Solutions</i></b></td>
						<td>
						<textarea>'.$row['solutions'].'</textarea>
						</td>
						<td>'.$row['markn'].'</td>
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
										'.$row['itemo'].'
									</td>
									<td>
										'.$row['amounto'].'
									</td>
									<td>
										'.$row['costo'].'
									</td>
									<td></td>
								</tr>
								<tr style="background: white;">
									<td>
										'.$row['itemt'].'
									</td>
									<td>
										'.$row['amountt'].'
									</td>
									<td>
										'.$row['costt'].'
									</td>
									<td></td>
								</tr>
								<tr>
									<td>
										'.$row['itemth'].'
									</td>
									<td>
										'.$row['amountth'].'
									</td>
									<td>
										'.$row['costth'].'
									</td>
									<td></td>
								</tr>
								<tr style="background: white;">
									<td>
										'.$row['itemf'].'
									</td>
									<td>
										'.$row['amountf'].'
									</td>
									<td>
										'.$row['costf'].'
									</td>
									<td></td>
								</tr>
								<tr>
									<td>
										'.$row['itemfv'].'
									</td>
									<td>
										'.$row['amountfv'].'
									</td>
									<td>
										'.$row['costfv'].'
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
										'.$row['total_bud'].'
									</td>
								</tr>
							</table>
						</td>
						<td>'.$row['markte'].'</td>
					</tr>
					<tr>
						<td><b><i>Image Summary</i></b></td>
						<td>
							Image was awarded
						</td>
						<td>'.$row['markel'].'</td>
					</tr>
					<tr id="row1">
						<td><b><i>Total Marks</i></b></td>
						<td></td>
						<td>'.number_format($row['total'], 0).' out of 10</td>
					</tr>
				</table><br><br>

				<p style="text-align: right;font-size: 1em;font-weight: bolder;">Marked and compiled by Tr.'.$pro_fname.' '.$pro_lname.'</p>
				
			
		</div>
</body>
</html>


	';
}

$dompdf = new Dompdf;
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();
$dompdf->stream($group.' '.$subject.' project report.pdf');

?>