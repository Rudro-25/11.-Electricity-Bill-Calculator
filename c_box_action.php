<?php 
    include "config.php";
    $name=$_POST["complain"];
    
    $q="INSERT INTO complain(id, txt)
    VALUES('', '$name')";
    $result=$conn->query($q);
    
    if($result)
        header('location:admin.php');

?>