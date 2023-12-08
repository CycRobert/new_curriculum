<?php

	if(isset($_POST['submit'])){
		mkdir("created4");
		$new_file = fopen("./created4/new.pdf", "x+");
		fwrite($new_file, $_POST['pdf']);
		fclose($new_file);
		//reopen the file

		echo "<script>alert('Redirect to display page');location.href='open.php';</script>"; 
	}

?>