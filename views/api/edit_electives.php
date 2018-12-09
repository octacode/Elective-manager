<?php
	include_once('dbconnect.php');
	$seats = $_GET['seats'];
	$link = $_GET['link'];
	$info = $_GET['info'];
	$sem = $_GET['sem'];
	$code = $_GET['code'];

	$result = Database :: updateelective($seats, $link, $info, $sem, $code);
	if ($result == 1)
		echo "{success}";
	else
		echo "{failure}";
?>
