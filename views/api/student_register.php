<?php
    include_once('dbconnect.php');
    $name = $_GET['name'];
    $roll_no = $_GET['roll_no'];
    $password = $_GET['password'];
    $fName = $_GET['fName'];
    $regNo = $_GET['reg_no'];
    $dob = $_GET['dob'];
    $branch = $_GET['branch'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $act = $_GET['act'];

    try {
    	$result = Database::studentregister($roll_no,$name,$password,$fName,$regNo,$dob,$branch,$phone,$email,"1");
    	if ($result == 1) {
    	echo "{success}";
    	} else {
    		echo "{failed}";
    	}
    } catch (Exception e) {
    	echo "{failed}";	
    }
?>