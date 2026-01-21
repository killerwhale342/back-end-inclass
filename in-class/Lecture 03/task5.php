<?php
    if(empty($_SESSION['username'])) {
        header("Location: ../profile/index.php");
    } elseif(!empty($_SESSION['username'])) {
        print('<p>This is the profile page of ' .$username.'</p>');
        //open file and read contents
        $myfile = fopen("visitors.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("visitors.txt")); //filesize -> can be changed with a number to limit chars read
        fclose($myfile);
        //testing writing to file
        $myfile = fopen("newfiles.txt", "w") or die("Unable to open file!");
        $txt = print(time(). " - " .$_SERVER['REMOTE_USER']);
        fwrite($myfile, $txt);
        fclose($myfile);
    }