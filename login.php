<?php
include_once 'header.php';
?>
<main>
    <div class="form" id="form">
        <div class="form_container">
            <div class="form_content">
                <a class="close_form" href="index.php" id="close_form">&#10006</a>
                <p>Log In</p>
                <form class="form_group" action="includes/login.inc.php" method="post">
                    <div>
                        <input type="text" class="form_field" name="uid" placeholder="Username/Email">
                        <div class="text"><h4 class="text_danger"></h4></div>
                        <input type="password" class="form_field" name="pwd" placeholder="Password">
                        <div class="text"><h4 class="text_danger"></h4></div>
                    </div>
                    <div class="form_button">
                        <button type="submit" name="submit">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                            Log In</button>
                    </div>
                    <div class="wrong">
                        <?php
                        if (isset($_GET["error"])) {
                            if ($_GET["error"] == "emptyinput") {
                                echo "<h3>Fill in all field!</h3>";
                            } else if ($_GET["error"] == "wronglogin") {
                                echo "<h3>Incorrect login!</h3>";
                            }    else if ($_GET["error"] == "none") {
                                echo "<h3>You have signed up!</h3>";
                            }
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php
include_once 'footer.php';
?>


</body>
</html>
