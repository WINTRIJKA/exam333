<?php
include_once 'header.php';
?>
<main>
    <div class="hello">
    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<p>Hello " . $_SESSION["useruid"] . " ! </p>";
    }
    ?>
    </div>
    <div class="loader">
        <span style="--i:1"></span>
        <span style="--i:2"></span>
        <span style="--i:3"></span>
        <span style="--i:4"></span>
        <span style="--i:5"></span>
        <span style="--i:6"></span>
        <span style="--i:7"></span>
        <span style="--i:8"></span>
        <span style="--i:9"></span>
        <span style="--i:10"></span>
    </div>
</main>
<?php
include_once 'footer.php';
?>
</body>
</html>