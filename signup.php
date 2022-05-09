<?php
include_once 'header.php';
?>
<main>
        <div class="form" id="form">
            <div class="form_container">
                <div class="form_content">
                    <a class="close_form" href="index.php" id="close_form">&#10006</a>
                    <p>Sign Up</p>
                    <form class="form_group" action="includes/signup.inc.php" method="post">
                        <div>
                            <input type="text" class="form_field" name="name" placeholder="Full name...">
                            <input type="text" class="form_field" name="email" placeholder="Email...">
                            <input type="text" class="form_field" name="username" placeholder="Username...">
                            <input type="password" class="form_field" name="pwd" placeholder="Password...">
                            <input type="password" class="form_field" name="pwdRepeat" placeholder="Repeat password...">
                        </div>
                        <div class="form_button">
                            <button type="submit" name="submit">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                Sign Up</button>
                        </div>
                        <div class="wrong">
                            <?php
                            if (isset($_GET["error"])) {
                                if ($_GET["error"] == "emptyinput") {
                                    echo "<h3>Fill in all field!</h3>";
                                } else if ($_GET["error"] == "invalidUid") {
                                    echo "<h3>Choose a proper username!</h3>";
                                } else if ($_GET["error"] == "invalidEmail") {
                                    echo "<h3>Choose a proper Email!</h3>";
                                } else if ($_GET["error"] == "passwordsdontmatch") {
                                    echo "<h3>passwords doesnt match!</h3>";
                                } else if ($_GET["error"] == "usernametaken") {
                                    echo "<h3>Username already taken!</h3>";
                                } else if ($_GET["error"] == "none") {
                                    echo "<h3>You have signed up!</h3>";
                                }
                                else if ($_GET["error"] == "stmtfailed") {
                                    echo "<h3>Something went wrong, try again!</h3>";
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