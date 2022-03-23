<?php
include "dbconnect.php";

$id=$_GET["delid"];
$q="DELETE FROM family WHERE id='$id'";
$result=$connect->query($q);

if($result)
	header('location:index.php');


?>