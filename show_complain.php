<?php
	include "config.php";
	$q="SELECT * FROM complain";
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
	<h1> Complain List</h1> <br> <br>

	<table cellpadding="5" cellspacing="5">
		<tr>
            <th>ID</th>
			<th>Text</th>
			<th>CreatBy</th>
			<th>CreateAt</th>
			<th>Action</th>
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
				echo "<td>".$row["CreatedAt"]. " </td>";
				echo "<td>"."<a href='reply.php?replyid=$id'>Reply</a>"."</td>";
			echo "</tr>";
		}
		
		?>
	</table>
    <br> <br>
	
	<a href="admin.php">Back</a>
    </center>
	</div>
</body>
</html>