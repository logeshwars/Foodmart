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
            <img class="loginImage" src="../login.jpg" alt="">
        </div>
        <div class="loginRight">
            <h3>Admin Login</h3>
            <h1>Welcome back</h1>
            <form action="" method="post">
                <div class="loginField">
                    <label for="email">
                    Mail ID
                </label>
                    <input type="email" id="email" name="email" placeholder="Enter Mail ID">
                </div>
                <div class="loginField">
                    <label for="password">
                    Password
                </label>
                    <input  name="pass"  placeholder="Enter password" type="password" id="password" />
                </div>
                <button name="login" class="loginButton">Log In</button>
               
            </form>
        </div>
    </main>
    <script src="" defer></script>
</body>

</html>
<?php
if(isset($_POST['login']))
{
     
     if($_POST['email']=="admin@gmail.com" && $_POST['pass']=="12345")
     {
	
        $cookie_name = "admin";
        $cookie_value = "yesadmin";
        if(setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"))
	    { 
	    header('location:./index.php');
        }
	    else
	    {
	    echo "<scrip>alert('Username or password is wrong')</script>";
        }
        }  
}
?>