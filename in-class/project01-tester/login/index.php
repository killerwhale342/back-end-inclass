<?php include "../../project01-tester/handy_methods/handy_methods.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <h1>Sign up</h1>
        <p class="ua-pp">By continuing, you agree to our  
            <a href="./">User Agreement</a> and acknowledge that you understand the 
            <a href="./">Privacy Policy</a>.
        </p>
        <div class="phone-google">Continue With Phone Number</div>
        <div class="phone-google">Continue With Google</div>
        <div class="or-line">
            <hr class="line">
            <span class="or">OR</span>
            <hr class="line">
        </div>
        <div>
            <form action="./index.php" method="GET" class="signup-form">
                <fieldset class="email-signup">
                    <label for="email">Email: </label><br>
                    <input type="email" name="email" id="email" required class="email-input"><br>
                </fieldset>
                <p>Already have an account? <a href="./">Log In</a>!</p>
                <input type="submit" name="Sign up" value="Continue" class="continue-btn">
            </form>
            <?php include "signup.php" ?>
        </div>
    </div>
</body>
</html>