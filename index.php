<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
     <?php
    include("nav.php");?>
    <section>
        <div class="sectionLeft">
            <h1>
                Discover the best food for your Taste
            </h1>
            <p>
                Enjoy a tasty and yummy! food from us. Made with ❤ and hygenic.
            </p>
            <a class="odernowButton" href="menu.php">Make Order</a>
        </div>
        <div><img src="sideimage.jpg" alt=""></div>
    </section>
    <div class="spdishes">
        <h3>
            Our Special Dishes
        </h3>
        <h4>
            Made with premium ingredients
        </h4>
        <div class="cardHolder">
            <?php
            require('connection.php');
  $sql="select * from foods order by id desc limit 3";
  $q=$conn->query($sql);      
             while($row=$q->fetch_assoc())
        {
            $details=substr($row['reciepe'],0,50);
            echo '<a href="details.php?id='.$row['id'].'">
            <div class="card"><img src="'.$row['image'].'" />
                <h5>'.$row['name'].'</h5>
                <p>
                '.$details.'...
                </p>
            </div></a>';
        }?>
        </div>
    </div>
</body>

</html>