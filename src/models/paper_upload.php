<?php
	print_r($_FILES['paper']['name']);
	if($_FILES['paper']['type'] == 'application/pdf')
		echo "komple!<br>";
	else
		echo "Unsupported format!<br>";
?>
