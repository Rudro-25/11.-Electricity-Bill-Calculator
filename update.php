<?php
include "dbconnect.php";
$id=$_GET["editid"];
$q="SELECT * FROM family WHERE id='$id'";
$result=$connect->query($q);
$r=$result->fetch_assoc();

$nam=$r['name'];
$meter=$r['meter_no'];
$uni=$r['unit'];
$date=$r['ldobs'];

?>

<html>
	<body>
	<center>
	<h1> Update a Family Info</h1>
	<form action="update_action.php?edit_id= <?php echo $id;?>" method="POST">
		Name
		<input type="text" name="name" value="<?php echo $nam ?>"> <br> <br>
		Meter No
		<input type="text" name="meter_no" value="<?php echo $meter ?>"> <br> <br>
		Used Unit
		<input type="text" name="unit" value="<?php echo $uni ?>"> <br> <br>
		Last Date Of Bill Submission
		<input type="text" name="ldobs" value="<?php echo $date ?>"> <br> <br>
		<input type="submit" value="Update">
	
	</form>
</center>
	</body>

</html>