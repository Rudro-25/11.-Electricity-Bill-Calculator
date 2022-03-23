<?php
	include "config.php";
	$q="SELECT * FROM users where type ='3' ";
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
	<h1> Consumer List</h1> <br> <br>

	<table cellpadding="5" cellspacing="5">
		<tr>
            <th>ID</th>
			<th>Name</th>
			<th>Bill(Tk)</th>
			<th>Action</th>
		</tr>
		
		<?php
        
        $x=1;
        $bill= 500;
		while($row=$result->fetch_assoc())
		{   
            $id=$row["id"];
			echo "<tr>";
                echo "<td>".$x++. " </td>";
				echo "<td>".$row["name"]. " </td>";
				echo "<td>".$bill. " </td>";
				echo "<td>"."<a href='trans.php?editid=$id'>Transaction(Bkash)</a>"."</td>";
			echo "</tr>";
			$bill = $bill + 50;
		}
		
		?>
	</table>
    <br> <br>
	
	<a href="insert_consumer.php">Add New Consumer</a>
    </center>
	</div>
</body>
</html>