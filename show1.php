<?php
	include "config.php";
	$q="SELECT * FROM meter";
	$result=$conn->query($q);

?>

<html>
<head>
	<link rel="stylesheet" href="style.css">
	<style>
		table, td, th{
			border-collapse:collapse;
			border: 2px solid blue;
		}
		table{
			width: 80%;
		}
	
	</style>
</head>

<body>
	<div class="pada">
    <center>
    <br>
	<h1> Meter List</h1> <br> <br>

	<table cellpadding="5" cellspacing="5">
		<tr>
            <th>ID</th>
			<th>Name</th>
			<th>Edit</th>
			<th>Delete</th>
		</tr>
		
		<?php
        
        $x=1;
		while($row=$result->fetch_assoc())
		{   
            $id=$row["id"];
			echo "<tr>";
                echo "<td>".$x++. " </td>";
				echo "<td>".$row["name"]. " </td>";
				echo "<td>"."<a href='update1.php?editid=$id'>Edit</a>"."</td>";
				echo "<td>"."<a href='del1.php?delid=$id'>Delete</a>"."</td>";
			echo "</tr>";
		}
		
		?>
	</table>
    <br> <br>
	
	<a href="insert1.php">Add New Meter record</a>
    </center>
	</div>
</body>
</html>