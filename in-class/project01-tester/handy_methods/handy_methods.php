<?php
    //configure server settinga for PHP
    error_reporting(E_ALL); //report all types of errors
    ini_set('display_errors', '1'); //NOT IN PRODUCTION
    //protect our site from XSS attacks
    function test_input($data) 
    {
        $data = trim($data); //remove whitespace
        $data = stripslashes($data); //remove slashes
        $data = htmlspecialchars($data); //translate to html safe characters
        return $data;
    }
?>