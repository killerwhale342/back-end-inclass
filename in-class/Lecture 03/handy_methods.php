<?php
    //configure server settinga for PHP
    error_reporting(E_ALL); //report all types of errors
    ini_set('display_errors', '1'); //NOT IN PRODUCTION

    //Start a PHP session for each user arriving to the page
    //This generates a session cookie and enables us to store user data in $_SESSION superglobal variable
    //NB! The user can log out by deleting cookies

    //protect our site from XSS attacks
    function test_input($data) 
    {
        $data = trim($data); //remove whitespace
        $data = stripslashes($data); //remove slashes
        $data = htmlspecialchars($data); //translate to html safe characters
        return $data;
    }
?>