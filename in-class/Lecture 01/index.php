<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My Website</h1>
    <?php 
        //Comments work with double slashes
        print(1+2);
        $variable = "Hello, World!";
        print($variable);
        print($_SERVER['SERVER_SOFTWARE']);
        //phpinfo();
    ?>
</body>
</html>