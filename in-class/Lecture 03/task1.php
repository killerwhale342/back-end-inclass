<?php
    $cookie_name  = "language";
    $cookie_value = "EN";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    //86400 seconds = 1 day -> expires after a month
    if (isset($_COOKIE[$cookie_name])) { //$_COOKIE = superglobal variable
    //isset() = checks if variable is set or empty
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    } else {
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }
?>