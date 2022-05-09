<?php
setcookie("count", countVisit());

function countVisit() {
    if (!isset($_COOKIE["count"])) {
        return 1;
    } else {
        return $_COOKIE['count'] + 1;
    }
}
?>
<footer>
    <h3>you visited this page <?php echo $_COOKIE["count"];?></h3>
</footer>



