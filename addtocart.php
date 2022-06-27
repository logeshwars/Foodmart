<?php
require('connection.php');
$sql="insert into cart(pid,uid,status,quan)values (".$_GET['id'].",1,'ordered',1)";
  if($conn->query($sql))
  {
  echo "SUCCESS";
  }
  else    
   echo "FAILED"
?>