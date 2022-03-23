<?php 
	include "dbconnect.php";
	
	$id=$_GET['edit_id'];
	
	$uname=$_POST['name'];
	$meter=$_POST['meter_no'];
	$uni=$_POST['unit'];
	$date=$_POST['ldobs'];
	
	$q="UPDATE family SET name='$uname', meter_no='$meter', unit='$uni',
	ldobs='$date' WHERE id='$id'";
	$result=$connect->query($q);
	
	if($result)
	header('location:index.php');

?>