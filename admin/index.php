<?php
  require('../connection.php');
  $sql="select * from foods";
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
    <h1>Product Details</h1>
    <div class="tableHolder">
        <table>
            <tr>
                <th>SNO</th>
                <th>Image</th>
                <th>Name</th>
                <th>Actual Price</th>
                <th>Discount Price</th>
                <th>Delete</th>
            </tr>
            <?php
            while($row=$q->fetch_assoc())
        {
             echo "<tr>
                <td>".$row["id"]."</td>
                <td><img src='../".$row["image"]."' /></td>
                <td>".$row["name"]."</td>
                <td>".$row["aprice"]."</td>
                <td>".$row["dprice"]."</td>
                
                <td>
                    <form action='' method='post'>
                     <input type='hidden' name='id' value='".$row["id"]."'  >
                    <button name='delete' class='btn delete'>Delete</button></form>
                </td>
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