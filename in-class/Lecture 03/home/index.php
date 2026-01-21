<?php include "../handy_methods.php" ?>
<!DOCTYPE html>
<html lang="en">
<?php include "../header.php" ?>
<body>
    <div id="container">
        <?php include "../nav.php" ?>
        <section>
            <article>
                <h1>Testing</h1>
                <p>Here is your current date</p>
            </article>
            <article>
                <h2>Date countdown</h2>
                <input type="date">
                <?php include "../task2.php" ?>
            </article>
            <article>
                <h2>Profile picture</h2>
                <p>Please upload the file</p>
                <form action="./index.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="fileToUpload" id="fileToUpload">
                    <input type="submit" value="Upload Profile Pic" name="submit">
                </form>
                <?php include "../task6.php" ?>
            </article>
        </section>
    </div>
</body>
</html>