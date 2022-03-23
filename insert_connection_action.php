<?php 
	include "config.php";
	$name=$_POST["name"];
	$email=$_POST["email"];

    
	$q="INSERT INTO application(id, name, email)
	VALUES('', '$name', '$email')";
	$result=$conn->query($q);
	
	if($result)
        header('location:login.php');

?>