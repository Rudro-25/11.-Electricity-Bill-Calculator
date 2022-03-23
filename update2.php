<?php
include "config.php";
$id=$_GET["editid"];
$q="SELECT * FROM users WHERE id='$id'";
$result=$conn->query($q);
$r=$result->fetch_assoc();


    $name=$r["name"];
	$email=$r["email"];
	$phone=$r["phone"];
	$type=$r["type"];


?>

<html>
	<body>
	<center>
	<h1> Update a User Info</h1>
	<form action="update2_action.php?edit_id= <?php echo $id;?>" method="POST" enctype="multipart/form-data">
        Name 
		<input type="text" name="name" value="<?php echo $name ?>"> <br> <br>
		Email
		<input type="email" name="email" value="<?php echo $email ?>"> <br> <br>
		Phone
		<input type="text" name="phone" value="<?php echo $phone ?>"> <br> <br>
		Type
		<input type="int" name="type" value="<?php echo $type ?>"> <br> <br>

		<input type="submit" value="Update">
	
	</form>
</center>
	</body>

</html>