<?php
include "config.php";

$id=$_GET["delid"];
$q="DELETE FROM meter WHERE id='$id'";
$result=$conn->query($q);

if($result)
	header('location:show1.php');


?>