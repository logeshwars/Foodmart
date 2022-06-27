<?php
require('connection.php');
if(isset($_POST['paynow']))
{
    $sql="select * from cart where uid=".$_COOKIE['uid'];
    $q=$conn->query($sql); 
    while($row=$q->fetch_assoc())
    {
    $sql="insert into orders(pid,cid,status,quan)values (".$row['pid'].",".$_COOKIE['uid'].",'ordered',".$row['quan'].")";
    if($conn->query($sql))
    { 
    $sql="delete from cart where cid=".$row['cid'];
    $conn->query($sql) ;
    echo "<script>alert('Product ordered')</script>";
    }    
}
     header("location:./cart.php");
}
    
?>
