<?php
require('connection.php');
$sql="select * from users where id=".$_COOKIE['uid'];
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
    <link rel="stylesheet" href="">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Maven+Pro:wght@500&family=Poppins&display=swap');
        * {
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }
        
        .change {
            background-color: green;
            color: white;
            border: none;
            width: 50%;
            font-size: 1.1rem;
            cursor: pointer;
            border-radius: 3px;
            box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.165);
            padding: 10px 20px;
        }
        
        .row input,
        .row textarea {
            width: 200px;
            background-color: rgba(0, 128, 0, 0.173);
            border: 1px solid green;
            padding: 10px 20px;
        }
        
        body {
            background-color: whitesmoke;
            display: flex;
            flex-direction:column;
            align-items: center;
            gap:10vh;
            /* justify-content: center; */
            height: 100vh;
        }
        
        .container {
            width: 40vw;
            height: max-content;
            align-items: center;
            padding: 10px 20px;
            display: flex;
            gap: 40px;
            background-color: white;
            flex-direction: column;
        }
        
        .row {
            width: 100%;
            display: flex;
            padding: 0 20px;
            justify-content: space-between;
        }
        
        @media screen and (max-width:780px){
            .container {
            width: 90vw;
            padding: 10px 10px;
        }
        .row input,
        .row textarea {
            width: 180px;
        }
        body {
            gap:1vh;
         
        }
        }
    </style>
</head>

<body>
    <?php include("nav.php")?>
    <form action="changeaddress.php" method="post">
    <div class="container">
        <h1>My Profile</h1>
        <div class="row">
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter your name" value="<?php echo $row['name'] ?>"/>
        </div>
        <div class="row">
            <label>Email</label>
            <input type="text" name="email" placeholder="Enter your email"  value="<?php echo $row['email'] ?>"/>
        </div>
        <div class="row">
            <label>Phone</label>
            <input type="text" name="phone" placeholder="Enter your phone no"  value="<?php echo $row['phone'] ?>"/>
        </div>
        <div class="row">
            <label>Password</label>
            <input type="text" name="password" placeholder="Enter your password"  value="<?php echo $row['password'] ?>"/>
        </div>
        <div class="row">
            <label>Address</label>
            <textarea placeholder="Enter you address"  name="address"><?php echo $row['address'] ?></textarea>
        </div>
        <button class="change" name="change">Change</button>
    </div>
    </form>
    <script src="" async defer></script>
</body>

</html>