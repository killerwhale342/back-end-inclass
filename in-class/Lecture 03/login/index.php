<?php include "../handy_methods.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles.css">
    <script src="../script.js" defer></script>
</head>
<body>
    <section>
        <article>
            <h1>Login</h1>
            <p>Please log in or sign up below:</p>
        </article>
        <article>
            <h2>Login/ Signup form</h2>
            <form action="./index.php" method="GET">
                Username:<br><input type="text" name="username"><br>
                Email:<br><input type="text" name="email"><br>
                <!--Password:<br><input type="password" name="password"><br>-->
                <input type="submit" name="Sign up">
            </form>
            <p>Already have an account? <a href="./index.php?form=login">Log in</a></p>
            <?php include "../task4.php" ?>
        </article>
    </section>
</body>
</html>