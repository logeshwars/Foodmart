<!DOCTYPE html>
<?php 
    require('../connection.php');
     ?> 
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="createdish.css">
</head>

<body>
    <?php
    include("adminnav.php");
    ?>
    <h1>Create dish</h1>
    <form action="" method="post"  enctype="multipart/form-data">
        <div class="inputfield">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter the Name of Food">
        </div>
        <div class="inputfield">
            <label>Image</label>
            <input type="file" name="image" placeholder="upload the image file">
        </div>
        <div class="inputfield">
            <label>Actual price</label>
            <input type="text" name="actual" placeholder="Enter the Actual price" />
        </div>
        <div class="inputfield">
            <label>Discount price</label>
            <input type="text" name="total" placeholder="Enter Discount price" />
        </div>
        <div class="inputfield">
            <label>Discount</label>
            <input type="text" name="disc" placeholder="Enter Discount percentage" />
        </div>
        <div class="inputfield">
            <label>
                  How it's made
              </label>
            <textarea placeholder="Enter the receipe" name="howits" id="" cols="30" rows="10"></textarea>
        </div>
        <button class="createbutton" name="create">Create</button>
    </form>
    <script src="" async defer></script>
</body>

</html>

<?php
if(isset($_POST["create"]))
{
$name = $_POST["name"];
$actual = $_POST["actual"];
$total = $_POST["total"];
$disc = $_POST["disc"];
$his = $_POST["howits"];
$filename = $_FILES["image"]["name"];
$tempname = $_FILES["image"]["tmp_name"];
$folder   = "../images/" . $filename;
$uploadfolder = "images/" . $filename;
if (move_uploaded_file($tempname, $folder)) 
{
    $sql="INSERT INTO `foods` ( `name`, `image`, `aprice`, `dprice`, `dis`, `reciepe`) VALUES ( '$name', '$uploadfolder',$actual, $total, $disc, '$his')";
   if(mysqli_query($conn, $sql))
   {
       echo "<script>alert('Data inserted')</script>";
   }
   else
   {
      
    echo "<script>alert('Try again')</script>";
}
}
}
    ?>