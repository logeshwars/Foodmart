<?php
 require('connection.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="cart.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
      <?php
    include("nav.php");
    $sql="select * from cart where uid=".$_COOKIE['uid'];
    $q=$conn->query($sql); 
    $total_amount=0;
    $total_products=0;
    ?>
    <section>
        <div class="cartRight">
            <div>
                <h3>Check Out</h3>
            </div>
            <?php
            $i=0;
            while($row=$q->fetch_assoc())
            {
                $sql="select * from foods where id=".$row['pid'];
                $pro=$conn->query($sql); 
                $product=$pro->fetch_assoc();
                $total_products++;
                $total_amount+=$product['aprice'];
           echo '
            <div class="card">
                <img src="'.$product['image'].'" alt="">
                <div class="cardDetails">
                    <h3>'.$product['name'].'</h3>
                    <div class="price">
                        <h4><span>₹'.$product['aprice'].'</span>&nbsp;&nbsp; ₹'.$product['dprice'].'</h4>
                        <h4>'.$product['dis'].'% off</h4>
                    </div>
                    <div class="addlessbutton">
                    <form action="changequan.php" method="post">
                     <input type="hidden" name="id" value="'.$row['cid'].'"/>
                    <button  name="less" value="less"  onclick=inccount(0,"less") ><i class="bi bi-dash-circle"></i></button>
                        <input class="c1" value="'.$row['quan'].'" type="number" name="count">
                        <button name="add" value="add" onclick=inccount("'.$i++.'","add") ><i class="bi bi-plus-circle"></i></button></div>
                    
                        </form>
                        <form method="post" action="cartremove.php" > 
                    <input type="hidden" name="id" value="'.$row['cid'].'"/>
                        <button class="removeButton" name="remove" value="clicked">Remove</button>
                    </form>
                </div>

            </div>
            ';
            }
            ?>
        </div>
      
          <form action="ordernow.php" method="post" class="cartLeft">    
            <div>
                <h3>Price details</h3>
            </div>
            <div class="pricedetails">
                <h3>Price (<?php echo $total_products ?> items)</h3>
                <h3>₹<?php echo $total_amount ?></h3>
            </div>
            <div class="pricedetails">
                <h3>Tax charges</h3>
                <h3>₹2</h3>
            </div>
            <hr>
             
            <div class="pricedetails">
                <h3>Total</h3>
                <h3>₹<?php echo $total_amount+2 ?></h3>
            </div>
           
            <button name="paynow" class="paynow">Order Now</button>
        </form>
    </section>
    <script src="cart.js" defer></script>
</body>

</html>