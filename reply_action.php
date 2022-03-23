<?php 
	include "config.php";
	
	$id=$_GET['reply_id'];

	$txt=$_POST["txt"];
	$rply=$_POST["reply"];
	
	$q="UPDATE complain SET txt='$txt', reply='$rply'  WHERE id='$id'";
	$result=$conn->query($q);
	
	if($result)
		echo "Reply Done";
?>