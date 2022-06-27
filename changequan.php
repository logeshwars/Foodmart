<?php
require('connection.php');
if(isset($_POST['add']) && $_POST['add']=='add')
{
$sql="update cart set quan=".$_POST['count']." where cid=".$_POST['id'];
  if($conn->query($sql))
  {
  echo "<script>alert('Quantity  updated')</script>";
   header("location:./cart.php");
}
}
else if(isset($_POST['less']) && $_POST['less']=='less')    
{
    
 $sql="update cart set quan=".$_POST['count']." where cid=".$_POST['id'];
  if($conn->query($sql))
  {
  echo "<script>alert('Quantity  updated')</script>";
   header("location:./cart.php");
  }
}
?>