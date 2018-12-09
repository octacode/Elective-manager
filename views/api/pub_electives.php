<?php
	include_once('dbconnect.php');
	$loginuser = $_GET['login_user'];
	$electivetype = $_GET['electivetype'];
	$subject = $_GET['subject'];
	$seats = $_GET['seats'];
	$link = $_GET['link'];
	$semester = $_GET['semester'];
	$info = $_GET['info'];

	$result = Database :: publishelective($loginuser, $electivetype, $subject, $seats, $link, $semester, $info);
	if ($result == 1)
		echo "{success}";
	else 
		echo "{failure}";
?>