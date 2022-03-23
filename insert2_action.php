<?php 
	include "config.php";
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$type=$_POST["type"];

    
	$q="INSERT INTO users(id, name, email, phone, type)
	VALUES('', '$name', '$email','$phone', '$type')";
	$result=$conn->query($q);
	
	if($result)
        header('location:admin.php');

?>