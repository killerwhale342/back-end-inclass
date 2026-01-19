<header> <!--Container for logo and main menu-->
    <div id="logo">Healthy dating</div>
    <nav>
        <ul>
            <li><a href="../home/">Ads</li>
            <?php
                if(!empty($_SESSION['username'])) {
                    print("<li><a href='../login/'>Profile</a></li>");
                } else {
                    print("<li><a href='../login/'>Login</a></li>");
                }
            ?>
        </ul>
    </nav>
</header>