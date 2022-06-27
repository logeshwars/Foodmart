<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <main>
        <div class="loginLeft">
            <img class="loginImage" src="login.jpg" alt="">
        </div>
        <div class="loginRight">
            <h3>Register</h3>
            <h1>Join with us</h1>
            <form action="" method="post">
                <div class="loginField">
                    <label for="name">
                    Name
                </label>
                    <input required  type="text" id="name" name="name" placeholder="Enter Your name">
                </div>
                <div class="loginField">
                    <label for="email">
                    Mail ID
                </label>
                    <input required  type="email" id="email" name="email" placeholder="Enter Mail ID">
                </div>
                <div class="loginField">
                    <label for="password">
                    Password
                </label>
                    <input required   name="pass"  placeholder="Enter password" type="password" id="password" />
                </div>
                <div class="loginField">
                    <label for="phone">
                    Phone No
                </label>
                    <input required   name="phone"  placeholder="Enter phone number" type="text" id="phone" />
                </div>
                <div class="loginField">
                    <label for="password">
                    Address
                </label>
                    <textarea required name="address" placeholder="Enter the address"></textarea>
                </div>
                <button name="login" class="loginButton">Register</button>
            </form>
        </div>
    </main>
    <script src="" defer></script>
</body>

</html>
<?php
if(isset($_POST['login']))
{
    require('connection.php');
     $sql="insert into users(email,name,password,phone,address) values('".$_POST['email']."','".$_POST['name']."','".$_POST['pass']."',".$_POST['phone'].",'".$_POST['address']."')";  
     echo $sql;
     if($conn->query($sql))
     {
	    header('location:./login.php');
        }
	    else
	    {
	    echo "<scrip>alert('Give the information correct')</script>";
        }
}
?>