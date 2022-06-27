<?php
  require('connection.php');
  $sql="select * from foods where id=".$_GET['id'];
  $q=$conn->query($sql);    
  $row=$q->fetch_assoc()  
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="details.css">
</head>

<body>
       <?php
    include("nav.php");
    include("successpage.html");
    ?>
    <section>
        <img src="<?php echo $row['image'] ?>">
        <div class="detailsLeft">
            <h1>
               <?php echo $row['name'] ?>
            </h1>
            <div class="cardDetails">

                <div class="price">
                    <h4><span>₹<?php echo $row['aprice'] ?></span>&nbsp;&nbsp; ₹<?php echo $row['dprice'] ?></h4>
                    <h4><?php echo $row['dis'] ?>% off</h4>
                </div>
                <form action="addtocart.php" method="post" id="form">
                    <input type="hidden" name='ids' id="ids" value="<?php echo $row['id'] ?>"/>
                    <input type="hidden" name='loc' value="details.php?id=<?php echo $_GET['id']?>"/>
                <button class="addtocartbutton" name='addcart' value='add' >Add to cart</button>
                </form>
                <h3>How it's made</h3>
                <p><?php echo $row['reciepe'] ?>
                </p>
            </div>
        </div>
    </section>
    <script defer>
    document.querySelector("#form").addEventListener("submit",(e)=>{
    e.preventDefault()
    fetch(`addtocart.php?id=${document.querySelector("#ids").value}`).then((res)=>
    res.text()).then((data)=>
    {if(data=="SUCCESS")
        document.querySelector(".popup").style.display="grid";
     else
     alert("failed")
    
    })
    })
    </script>
</body>

</html>
