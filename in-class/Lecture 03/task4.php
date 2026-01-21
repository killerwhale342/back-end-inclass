<?php
//Grab the data from the URL field using $_GET method
$signup_email = $_REQUEST['email'];
$username = test_input($_REQUEST['username']);
//Sanititze $signup_email, prevent cross-site scripting (XSS) attacks
$safe_email = test_input($signup_email);
print("Signed up as: " . $safe_email);

if($safe_email == "tttt@arcada.fi") {
    //User email "verified"
    if($username == "tttt") {
        //username "verified" - allow login
        print("Welcome nack ".$username."!");
        $_SESSION['username'] = $username; //store username in session storage after successful login
        header("Refresh:0; url=../profile/"); //redirect to home page, not ideal but works for now
    } else {
        print("Username verification failed!");
    }
}

//Swap to login form if user clicks the link
if($_REQUEST['form'] == 'login')
{
    print("Log in below:");
    print("<a href='./index.php?form=signup'>Sign up here</a>");
}