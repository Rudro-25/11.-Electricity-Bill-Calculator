<?php 
	include "config.php";
	
	$id=$_GET['edit_id'];

	$name=$_POST["name"];
	
	$q="UPDATE meter SET name='$name' WHERE id='$id'";
	$result=$conn->query($q);
	
	if($result)
		header('location:show1.php');
?>