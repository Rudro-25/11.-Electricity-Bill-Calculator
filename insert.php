
<?php

  include "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$id = uniqid();
    $usrid = $_POST['userId'];
    $month = $_POST['month'];
    $unit = $_POST['unit'];

    $usageUnits = $unit;
    $demandCharge = 50;


    $bill = 0;
    $usageUnitsClone = $usageUnits;

    if ($usageUnitsClone > 500) {
        $bill += ($usageUnitsClone - 500) * 7;
        $usageUnitsClone = 500;
    }
    if ($usageUnitsClone > 300) {
        $bill += ($usageUnitsClone - 300) * 5;
        $usageUnitsClone = 300;
    }
    if ($usageUnitsClone > 100) {
        $bill += ($usageUnitsClone - 100) * 4;
        $usageUnitsClone = 100;
    }

    $bill += ($usageUnitsClone * 3.5);

    if ($usageUnits < 500) {
        $bill += ($bill * .05);
    } else {
        $bill += ($bill * .1);
    }

    $bill = $bill + $demandCharge;

  

    $createbill = mysqli_query($conn, "INSERT INTO `bill_details` (`id`, `userid`, `unit`, `month`, `bill`) VALUES ('', '$usrid', '$unit','$month', '$bill');");


    if (!$createbill) {
    } else {
        echo "Bill Adding Successful";
        header('location: admin.php');
    }
}
?>
<html>
    <head>
    	<link rel="stylesheet" href="style.css">
    </head>
	<body>
	<center>


	<form class="pada" action="" method="POST">
		<h3> Insert Biller Info</h3>
        <br/><br/>
       <label for="id">ID</label></br>  
		<select name="userId" class="form-select shadow-none" id="userId">
          <?php
            $allUsersRes = mysqli_query($conn, "SELECT * FROM users WHERE type = '3';");
            while($singleUser = mysqli_fetch_assoc($allUsersRes)) { ?>
             
              <option value="<?php echo $singleUser['id'] ?>"><?php echo $singleUser['id'] ?></option>
           <?php }
          ?>
     </select><br> <br>
        <label for="month">Month:</label>
        <select type="text" name="month" id="">
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
        </select> <br> <br>
        <label for="unit">Used Unit</label> <br />
        <input type="text" name="unit" id=""> <br />
        <br/><br/>
		
		<input type="submit" value="Submit">
	
	</form>
</center>
	</body>

</html>

