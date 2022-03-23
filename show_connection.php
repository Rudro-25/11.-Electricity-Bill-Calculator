<?php
	include "config.php";
	$q="SELECT * FROM application";
	$result=$conn->query($q);

?>

<html>
<head>
	<style>
		table, td, th{
			border-collapse:collapse;
			border: 5px solid #0080ff;
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
	<h1> Consumer List For New Connection</h1> <br> <br>

	<table cellpadding="5" cellspacing="5">
		<tr>
            <th>ID</th>
			<th>Name</th>
			<th>EMAIL</th>
			<th>ACTION</th>
		</tr>
		
		<?php
        
        $x=1;
		while($row=$result->fetch_assoc())
		{   
            $id=$row["id"];
			echo "<tr>";
                echo "<td>".$x++. " </td>";
				echo "<td>".$row["name"]. " </td>";
				echo "<td>".$row["email"]. " </td>";
				echo "<td>"."<a href='update2.php?editid=$id'>Edit</a>" . "<a href='del2.php?delid=$id'> Delete</a>"."</td>";
			echo "</tr>";
		}
		
		?>
	</table>
    <br> <br>
	
	<a href="insert_connection.php">Add New Connection record</a>
    </center>
	</div>
</body>
</html>