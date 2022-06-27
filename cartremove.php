<?php
require('connection.php');
if($_POST['remove']="clicked")
{
$sql="delete from cart where cid=".$_POST['id'];
  if($conn->query($sql))
  {
   echo "<script>alert('removed from cart')</script>";
   header("location:./cart.php");
  }
  else    
  echo "<script>alert('Try again')</script>";
  }
?>