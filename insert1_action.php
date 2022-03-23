<?php 
	include "config.php";
	$name=$_POST["name"];
	
	$q="INSERT INTO meter(id, name)
	VALUES('', '$name')";
	$result=$conn->query($q);
	
	if($result)
        header('location:admin.php');

?>