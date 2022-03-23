<?php
  session_start();

  if(!isset($_SESSION['userId'])) {
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Index</title>
</head>
<body>
  <nav class="pada">
    <?php
      if($_SESSION['userRole'] == '1' || $_SESSION['userRole'] == '4') {
        ?>
          <a href="insert1.php">Add Meter</a><br/>
          <a href="show1.php">Show Meter</a><br/><br/>
          <a href="insert2.php">Add Users</a><br/>
          <a href="show2.php">Show Users</a><br/><br/>
          <a href="show_complain.php">Complain</a><br/><br/>
        <?php
      }
    ?>
    <?php
      if($_SESSION['userRole'] == '2' || $_SESSION['userRole'] == '4') {
        ?>
          <a href="insert.php">Bill System</a><br/><br/>
          <a href="show_biller_info.php">Show Biller Info</a><br/><br/>
        <?php
      }
    ?>
    <?php
      if($_SESSION['userRole'] == '3' || $_SESSION['userRole'] == '4') {
        ?>
          <a href="consumer.php">Consumer List</a> <br/>
          <a href="c_box.php">Complain Box</a><br/>
          <a href="show_com.php">Show Complain</a><br/>
        <?php
      }
    ?>

    <br/><br/><br/>
    <a href="logout.php">Logout</a>
  </nav>
</body>
</html>