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
            <h3>Login</h3>
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
                <p class="loginDash">&#x2015;&#x2015;&#x2015;&#x2015;&#x2015;&#x2015;&#x2015;&#x2015;&#x2015;
                    <span>Create new account</span>&#x2015;&#x2015;&#x2015;&#x2015;&#x2015;&#x2015;&#x2015;&#x2015;</p>
                <a class="loginRegister" href="register.php">Register Now</a>
                 <a class="loginRegister" href="admin/login.php" style="background-color:white;color:green">Login as admin</a>
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
     $sql="select * from users where email='".$_POST['email']."' and password='".$_POST['pass']."'";
     $q=$conn->query($sql);  
     $row=$q->fetch_assoc();
     if(isset($row))
     {
	
        $cookie_name = "uid";
        $cookie_value = $row['id'];
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