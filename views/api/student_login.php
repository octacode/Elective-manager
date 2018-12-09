<?php
    include_once('dbconnect.php');
    
    $password = $_GET['password'];
    $roll_no = $_GET['roll_no'];

    $result = Database::studentLogin($roll_no, $password);
    if ($result == 1)
    	echo "{success}";
    else
    	echo "{failure}";
?>