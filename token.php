<?php
	$token = $_POST['token'];
  $file = 'temp';
	$handle = fopen($file, 'w') or die('Cannot open file:  '.$file);
	fwrite($handle, $token);
 ?>
