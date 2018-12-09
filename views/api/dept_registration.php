<?php
    include_once('dbconnect.php');
    $username = $_GET['username'];
    $password = $_GET['password'];
    $dept = $_GET['dept'];
    $phone = $_GET['phone'];
    $email = $_GET['email'];
    $token = $_GET['token'];

    $result = Database::departmentregister($username,$password,$phone,$email,$dept,$token);
    if ($result == 1) {
        echo "{success}";
    } else {
    	echo "{failed}";
    }
    
?>