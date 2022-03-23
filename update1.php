<?php
include "config.php";
$id=$_GET["editid"];
$q="SELECT * FROM meter WHERE id='$id'";
$result=$conn->query($q);
$r=$result->fetch_assoc();

  $name=$r["name"];

?>

<html>
	<body>
	<center>
	<h1> Update a Meter Info</h1>
	<form action="update1_action.php?edit_id= <?php echo $id;?>" method="POST" enctype="multipart/form-data">
        Name 
		<input type="text" name="name" value="<?php echo $name ?>"> <br>  <br> <br>
		<input type="submit" value="Update">
	
	</form>
</center>
	</body>

</html>