<?php

	$handle = fopen("./created4/new.pdf", "rb");

	$contents = fread($handle, filesize("./created4/new.pdf"));

	echo "<textarea>".$contents."</textarea>";

	fclose("./created4/new.pdf");

?>