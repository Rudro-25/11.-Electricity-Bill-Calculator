<?php
  session_start();

  include '../config.php';

  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $singleUserResult = mysqli_query($conn, "SELECT * FROM `users` WHERE `email` = '$email' AND `phone` = '$phone';");
  if(mysqli_num_rows($singleUserResult) == 0) {
    header('location: ../login.php');
  }

  $singleUser = mysqli_fetch_assoc($singleUserResult);
  
  $_SESSION['userId'] = $singleUser['id'];
  $_SESSION['userRole'] = $singleUser['type'];
  header('location: ../admin.php');
?>