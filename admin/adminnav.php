<!DOCTYPE html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title></title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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

        </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<nav>
        <div>
            <h3 class="logo"><a href="index.html">food mart</a></h3>
        </div>
        <div>
            <ul id="navbar">
                <li><a class="navLink" href="index.php">Foods</a></li>
                <li><a class="navLink" href="createdish.php">Create</a></li>
                <li><a class="navLink" href="orders.php">Orders</a></li>
                 <li><a class="navLink" href="users.php">Users</a></li>
                <li>
                    <a href="../index.php"><button class="loginButton">Log out</button></a>
                </li>
            </ul>
        </div>
    </nav>