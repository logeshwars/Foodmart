<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
     <script src="index.js" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<style>
   
      nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 40px;
    width: calc(100% - 80px);
    background-color: white;
    box-shadow: 1px 2px 3px rgba(16, 183, 1, 0.252);
    position: sticky;
    top: 0px;
    z-index: 2;
}

.logo a {
    font-family: 'Maven Pro', sans-serif;
    color: rgb(5, 165, 5);
    text-decoration: none;
    font-size: 1.5rem;
    font-weight: bold;
}

nav ul {
    display: flex;
    padding: 0;
    gap: 20px;
    align-items: center;
    list-style-type: none;
}

nav ul a {
    text-decoration: none;
    position: relative;
    color: black;
}

.nav ul li {
    position: relative;
}

.navLink::after {
    display: block;
    content: " ";
    background-color: green;
    height: 3px;
    width: 100%;
    border-radius: 30px;
    position: absolute;
    opacity: 0;
    transition: 200ms;
    transform: scale(0);
}

.navLink:hover {
    color: green;
}

.navLink:hover::after {
    opacity: 1;
    transform: scale(1);
}

.loginButton {
    padding: 8px 20px;
    border-radius: 20px;
    font-weight: bold;
    font-size: 0.8rem;
    letter-spacing: 2px;
    border: none;
    color: white;
    background-image: linear-gradient(rgb(62, 243, 62), rgb(4, 170, 4));
}

.cart {
    width: 35px;
    height: 35px;
    display: grid;
    place-items: center;
    color: black;
    border-radius: 50%;
    transition: background 200ms;
    background: white;
}

.cart:hover {
    cursor: pointer;
    color: white;
    background-image: linear-gradient(rgb(62, 243, 62), rgb(4, 170, 4));
}

.bi-cart3 {
    font-size: 1.3rem;
}
.menu {
    display: none;
}

@media screen and (max-width:780px) {
    
    nav ul {
        flex-direction: column;
        background-color: white;
        position: absolute;
        right: 5px;
        top: 60px;
        display: none;
        padding: 10px 0px;
        border-radius: 5px;
        width: 200px;
        box-shadow: 1px 2px 3px rgba(0, 0, 0, 0.217);
    }
    .menu {
        border: none;
        background-color: white;
        font-size: 2rem;
        position: absolute;
        right: 20px;
        display: block;
        font-weight: bolder;
    }
}
    </style>
    <nav>
        <div>
            <h3 class="logo"><a href="index.php">food mart</a></h3>
        </div>
        <button class="menu" onclick="showmenu()"><i class="bi bi-list"></i></button>
        <div>
            <ul id="navbar">
                <li><a class="navLink" href="index.php">Home</a></li>
                <li><a class="navLink" href="menu.php">Menu</a></li>
              
                <?php
                if(isset($_COOKIE['uid']))
                echo '<li><a class="navLink" href="profile.php">My profile</a></li>';
                ?>
                  <li>
                    <a href="cart.php" class="cart">
                        <i class="bi bi-cart3"></i>
                    </a>
                </li>
                <?php
                 if(isset($_COOKIE['uid'])) 
                echo ' <li>
                    <a href="logout.php"><button class="loginButton">Log Out</button></a>
                </li>';
                else 
                echo ' <li>
                    <a href="login.php"><button class="loginButton">Log In</button></a>
                </li>';
                ?>
               
            </ul>
        </div>
    </nav>
