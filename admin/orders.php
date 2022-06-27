<?php
  require('../connection.php');
  $sql="select * from orders order by odate desc";
  $q=$conn->query($sql);      
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
      <?php
    include("adminnav.php");
    ?>
    <h1>Order Details</h1>
    <div class="tableHolder">
        <table>
            <tr>
                <th>SNO</th>
                 <th>Username</th>
                  <th>User Email</th>
                  <th>User Phone</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Date</th>
                 <th>Address</th>
            </tr>
            <?php
            while($row=$q->fetch_assoc())
        {
             $sql="select * from foods where id=".$row['pid'];
             $pro=$conn->query($sql); 
             $prod=$pro->fetch_assoc();
             $sql="select * from users where id=".$row['cid'];
             $cus=$conn->query($sql); 
             $cust=$cus->fetch_assoc();
             echo "<tr>
              <td>".$row["oid"]."</td>
                <td>".$cust["name"]."</td>
                <td>".$cust["email"]."</td>
                <td>".$cust["phone"]."</td>
                <td><img src='../".$prod["image"]."' /></td>
                <td>".$prod["name"]."</td>
                <td>".$prod["aprice"]."</td>
                <td>".$row["quan"]."</td>
                <td>".$prod["aprice"]*$row["quan"]."</td>
                <td>".$row["odate"]."</td>
               <td>".$cust["address"]."</td>
            </tr>";
        }?>
        </table>
    </div>
    <script src="" defer></script>
</body>

</html>
<?php
if(isset($_POST["delete"]))
{
    $sql="delete from foods where id=".$_POST['id'];
   if(mysqli_query($conn, $sql))
   {
       echo "<script>alert('Data deleted')</script>";
   }
   else
   {
    echo "<script>alert('Try again')</script>";
}
}
?>