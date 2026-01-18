<?php
    //Grab the data from the URL field using $_GET method
    $signup_email = $_REQUEST['email'];
    //Sanititze $signup_email, prevent cross-site scripting (XSS) attacks
    $safe_email = test_input($signup_email);
    print("Signed up as: " . $safe_email);
    //Swap to login form if user clicks the link
    if($_REQUEST['form'] =='login')
    {
        print("Log in below:");
        print("<a href='./index.php?form=signup'>Sign up here</a>");
    }
?>