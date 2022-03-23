<?php
include "config.php";
$id=$_GET["replyid"];
$q="SELECT * FROM complain WHERE id='$id'";
$result=$conn->query($q);
$r=$result->fetch_assoc();

  $txt=$r["txt"];
?>
<html>
    <head>
      <link rel="stylesheet" href="style.css">
    </head>
  <body>
  <center>
  <h1> Do Your Reply</h1>
  <form action="reply_action.php?reply_id= <?php echo $id;?>" method="POST" enctype="multipart/form-data">
        Complain 
    <input type="text" name="txt" value="<?php echo $txt ?>"> <br>  <br> <br>
    Admin Reply
    <input type="text" name="reply">  <br/> <br/>
    <input type="submit" value="Reply">
  
  </form>
</center>
  </body>

</html>