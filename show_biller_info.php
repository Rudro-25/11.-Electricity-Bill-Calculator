<?php
    include "config.php";
    $q="SELECT * FROM bill_details";
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
    <div class="">
    <center>
    <br>
    <h1> Biller info List</h1> <br> <br>

    <table cellpadding="5" cellspacing="5">
        <tr>
            <th>ID</th>
            <th>UserId</th>
            <th>Unit</th>
            <th>Month</th>
            <th>Bill</th>
            <th>Status</th>
        </tr>
        
        <?php
        
        $x=1;
        while($row=$result->fetch_assoc())
        {   
            $id=$row["id"];
            echo "<tr>";
                echo "<td>".$x++. " </td>";
                echo "<td>".$row["userid"]. " </td>";
                echo "<td>".$row["unit"]. " </td>";
                echo "<td>".$row["month"]. " </td>";
                echo "<td>".$row["bill"]. " </td>";
                echo "<td>".$row["status"]. " </td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    <br> <br>
    
    <a href="insert.php">Add New Consumer Bill record</a>
    </center>
    </div>
</body>
</html>