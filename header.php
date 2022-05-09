<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">

    <title>Form</title>
</head>
<body>
<header>
    <a href="index.php" >home</a>
    <?php
    if (isset($_SESSION["useruid"])) {
        echo "<a href='profile.php'>Profile page</a>";
        echo "<a href='includes/logout.inc.php'>log out</a>";
    }
    else {
        echo "<a href='signup.php'>sign up</a>";
        echo "<a href='login.php'>log in</a>";
    }
    ?>
</header>
