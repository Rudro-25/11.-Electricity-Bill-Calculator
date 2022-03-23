<?php 
	include "config.php";
	
	$id=$_GET['edit_id'];

	$name=$_POST["name"];
	$email=$_POST["email"];
	$phone=$_POST["phone"];
	$type=$_POST["type"];

	
	
	$q="UPDATE users SET name='$name', email='$email', phone='$phone',
	type='$type' WHERE id='$id'";
	$result=$conn->query($q);
	
	if($result)
	header('location:show2.php');

?>