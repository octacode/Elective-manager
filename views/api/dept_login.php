<?php
    include_once('dbconnect.php');
    $name = $_GET['name'];
    $passsword = $_GET['password'];
    $result = Database :: departmentlogin($name, $password, "checks");
    if ($result == 0)
    	echo "{success}";
    else
    	echo "{failure}";
?>