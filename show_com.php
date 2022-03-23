<?php
	include "config.php";
	$q="SELECT * FROM complain";
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
	<div >
    <center>
    <br>
	<h1> Complain List</h1> <br> <br>

	<table cellpadding="5" cellspacing="5">
		<tr>
            <th>ID</th>
			<th>Complain</th>
			<th>Created By</th>
			<th>Reply</th>
		</tr>
		
		<?php
        
        $x=1;
		while($row=$result->fetch_assoc())
		{   
            $id=$row["id"];
			echo "<tr>";
                echo "<td>".$x++. " </td>";
				echo "<td>".$row["txt"]. " </td>";
				echo "<td>".$row["CreateBy"]. " </td>";
				echo "<td>".$row["reply"]. " </td>";
		}
		
		?>
	</table>
    <br> <br>
	
    </center>
	</div>
</body>
</html>