<?php
require('connection.php');
if(isset($_POST['change']))
{
$sql="update users set name='".$_POST['name']."',email='".$_POST['email']."',phone=".$_POST['phone'].",address='".$_POST['address']."',password='".$_POST['password']."' where id=".$_COOKIE['uid'];
echo $sql; 
if($conn->query($sql))
  {
  echo "<script>alert('Quantity  updated')</script>";
   header("location:./profile.php");
}
else
{
    echo "<script>alert('goback and try again')</alert>";
}
}
?>