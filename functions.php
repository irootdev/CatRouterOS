<?php
	$newusr = strip_tags($_GET['usr']);
	$newpass = strip_tags($_GET['pass']);
	
	if (strlen($newpass) < 3) die("error");
	if (strlen($newusr) < 3) die("error");
	
	$filename = 'db.php';
	$text = "<?php \n\r \$usr = '$newusr'; \n\r \$pas = '$newpass'; \n\r ?>";
	file_put_contents($filename, $text);
	
?>
