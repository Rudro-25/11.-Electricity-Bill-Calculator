<?php
include "config.php";

$id=$_GET["delid"];
$q="DELETE FROM users WHERE id='$id'";
$result=$conn->query($q);

if($result)
	header('location:show2.php');


?>