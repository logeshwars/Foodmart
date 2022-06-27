<?php
  require('connection.php');
  $sql="select * from foods";
  $q=$conn->query($sql);      
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Menu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="menu.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include("nav.php");
    include("successpage.html");
    ?>
    <section>
         <?php
         while($row=$q->fetch_assoc())
        {
            $details=substr($row['reciepe'],0,30);
           echo ' <form action="addtocart.php" method="post" id="form"> 
           <div class="card">
          
                    <input type="hidden" id="ids" name="ids" value= "'.$row['id'] .'"/>
                    <input type="hidden" name="loc" value="menu.php"/>
                </form>
            <button class="addtocart"  name="addcart" value="add" ><i class="bi bi-cart3"></i></button>
            <img src="'.$row['image'].'" alt="" />
            <h3>'.$row['name'].'</h3>
            <div class="price">
                <h4><span>₹'.$row['aprice'].
                '</span>&nbsp;&nbsp; ₹'.$row['dprice'].'</h4>
                <h4>'.$row['dis'].'% off</h4>
            </div>
            <p>
                '.$details.'
            </p>
            <a class="details" href="details.php?id='.$row['id'].'"><img src="cooking.png">Details</a>

        </div>';    
        }
        ?>
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