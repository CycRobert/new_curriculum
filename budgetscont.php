<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="js/jQuery.js"></script>
	<title>Budget</title>
	<style type="text/css">
		body{
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
		#tagth{
			color: orange;
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
		.h11{
			color: white;
			font-size: 1.5em;
			text-decoration: underline;
			text-align: center;
			margin-top: 2em;
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
		.line3{
			margin-top: 1em;
			border-top: 1px solid white;
			transition: 4s;
			width: 0em;
		}
		button{
			margin-left: 38em;
			margin-top: 1em;
			width: 35em;
			height: 2.3em;
			color: white;
			border-color: whitesmoke;
			background: none;
			border-radius: .4em;
		}
		button:hover{
			cursor: pointer;
			color: orange;
			background: white;
		
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			alert("If you opt to add a budget, click on the add budget button!");
			$("#tag1").css("width", "3.1em");
			$("#tag2").css("width", "3.3em");
			$("#tag3").css("width", "3.3em");
			$("#tag4").css("width", "3.3em");
			$("#line").css("width", "100%");
			$("#line3").css("width", "100%");
			$("#orange").css("color", "orange");
			$(".last").on("click", function(){
				$("#last").css("display", "none");
			})
			$("#submit").css("width", "35em");
			$("#submit1").css("width", "35em");
			$("#tago").on("click", function(){
				alert("The data you entered on this page was saved, we are redirection you to the homepage.");
				window.location.href = "index.php";
			})
			$("#do").on("click", function(){
				alert("Budget skipped, thank you");
				location.href="index.php";
			})
		})
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
				
				<a id="tago">Back</a>
			</nav>
		</nav>
			<div class="tags">
				<div class="tag1" id="tag1"></div>
			</div>
		<div class="line1" id="line"></div>
		<div class="empty"></div>
	</nav>
	<div id="white">
		<h1 class="h11">Project Budget</h1>
		<form method="post" enctype="multipart/form-data">
			<table id="table">
				<tr>
					<th>Item</th>
					<th>Quantity</th>
					<th>Cost</th>
					<th><input type="button" class="last" id="last" onclick="addrow()" value="Add last Row"></th>
				</tr>
				<tr id="row1">
					<td><input type="text" name="item1"  class="budgets"></td>
					<td><input type="number" name="amount1"  class="budgets"></td>
					<td><input type="number" name="cost1"  class="budgets"></td>
				</tr>
				<tr>
					<td><input type="text" name="item2" class="budgets"></td>
					<td><input type="number" name="amount2" class="budgets"></td>
					<td><input type="number" name="cost2" class="budgets"></td>
				</tr>
				<tr id="row1">
					<td><input type="text" name="item3"  class="budgets"></td>
					<td><input type="number" name="amount3" class="budgets"></td>
					<td><input type="number" name="cost3" class="budgets"></td>
				</tr>
				<tr>
					<td><input type="text" name="item4" class="budgets"></td>
					<td><input type="number" name="amount4" class="budgets"></td>
					<td><input type="number" name="cost4" class="budgets"></td>
				</tr>
				<tr id="row1">
					<td><input type="text" name="item5"  class="budgets"></td>
					<td><input type="number" name="amount5"  class="budgets"></td>
					<td><input type="number" name="cost5"  class="budgets"></td>
				</tr>
			</table><br>
			<input type="submit" class="submit" id="submit" value="Submit and Exit" name="submit"><br>
		</form>
		<button id="do">I can do without the budget</button>
		<script type="text/javascript">
			
			function addrow(){
				// body...
				var table = document.getElementById('table');

				var row = table.insertRow(5);

				var cell1 = row.insertCell(0);
				var cell2 = row.insertCell(1);
				var cell3 = row.insertCell(2);

				cell1.innerHTML = "<input type='text' name='item6' class='budgets'>";
				cell2.innerHTML = "<input type='number' name='amount6' class='budgets'>";
				cell3.innerHTML = "<input type='number' name='cost6' class='budgets'>";
			}

		</script>
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
	
	include "db_connect.php";
	
	$path = $_SESSION['group'];
		$class = $_SESSION['class'];
		$subject = $_SESSION['subject'];
		$stream = $_SESSION['stream'];
	$item1 = $_POST['item1'];
		$amount1 = $_POST['amount1'];
		$cost1 = $_POST['cost1'];
		$item2 = $_POST['item2'];
		$amount2 = $_POST['amount2'];
		$cost2 = $_POST['cost2'];
		$item3 = $_POST['item3'];
		$amount3 = $_POST['amount3'];
		$cost3 = $_POST['cost3'];
		$item4 = $_POST['item4'];
		$amount4 = $_POST['amount4'];
		$cost4 = $_POST['cost4'];
		$item5 = $_POST['item5'];
		$amount5 = $_POST['amount5'];
		$cost5 = $_POST['cost5'];
		$item6 = $_POST['item6'];
		$amount6 = $_POST['amount6'];
		$cost6 = $_POST['cost6'];

		$total = $amount1*$cost1 + $amount2*$cost2 + $amount3*$cost3 + $amount4*$cost4 + $amount5*$cost5 + $amount6*$cost6;


		if(isset($_POST["submit"])){
			$sql = "INSERT INTO budgets(form, groupname, subject, stream, itemo, itemt, itemth, itemf, itemfv, items, amounto, amountt, amountth, amountf, amountfv, amounts, costo, costt, costth, costf, costfv, costs, total) VALUES('$class', '$path', '$subject', '$stream','$item1','$item2', '$item3', '$item4', '$item5', '$item6', '$amount1', '$amount2', '$amount3', '$amount4', '$amount5', '$amount6', '$cost1', '$cost2', '$cost3', '$cost4', '$cost5', '$cost6', '$total')";

			if($conn->query($sql) === TRUE){
				echo "<script>alert('Budget added, project information saved, thank you!');location.href='index.php';</script>";
				session_destroy();
			}else{
				echo "<script>alert('Keep checking your code');</script>";
			}
		}else{
			session_destroy();
		}
?>