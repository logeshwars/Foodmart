<?php
 $cookie_name = "uid";
        $cookie_value = '';
        if(setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"))
	    { 
	    header('location:./index.php');
        }
?>