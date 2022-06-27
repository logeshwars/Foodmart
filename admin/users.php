<?php
  require('../connection.php');
  $sql="select * from users";
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
                <th>User Address</th>
            </tr>
            <?php
            while($cust=$q->fetch_assoc())
        {
             echo "<tr>
              <td>".$cust["id"]."</td>
                <td>".$cust["name"]."</td>
                <td>".$cust["email"]."</td>
                <td>".$cust["phone"]."</td>
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