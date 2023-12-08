<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>table</title>
	<script type="text/javascript" src="js/jQuery.js"></script>
	<style type="text/css">
		
	</style>
	<script type="text/javascript">
		$(document).ready(function(){

		})
	</script>
</head>
<body>
	<h1>Try make a user defined table</h1>
	<form>
		<table id="mytable">
			<tr>
				<th>Item</th>
				<th>Cost</th>
			</tr>
		</table>
		<script type="text/javascript">
			function create_table()
				{
					rn = window.prompt("Input number of rows", 2);
					cn = window.prompt("Input number of columns",2);
  
 					for(var r=0;r<parseInt(rn,10);r++)
 						{
   							var x=document.getElementById('mytable').insertRow(1);
   							for(var c=0;c<parseInt(cn,10);c++)  
    							{
     								var y=  x.insertCell(c);
    								y.innerHTML="<td><input type='text' placeholder='happy new year' name='"+r+c+"'></td>"+r; 
    							}
   						}
				}
		</script>
		<input type="button" name="" onclick="create_table()" value="Create table">
	</form>
	
</body>
</html>