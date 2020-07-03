<html>


<head>
    <meta charset="utf-8">
    <title>Summer Code Camp</title>
    <link rel="stylesheet" type="text/css" href="vitrine.css">
    <script src="script.js"></script>
</head>

<header>
    <?php include("header.php"); ?>
</header>

<?php

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'accueil') {
        include "vitrine-accueil.php";
    } else if ($_GET['page'] == 'programme') {
        include "vitrine-programme.php";
    } else if ($_GET['page'] == 'contacts') {
        include "vitrine-contacts.php";
    } else if ($_GET['page'] == 'contact-form') {
        include 'contact-form.php';
    } else if (isset($_GET['page']))
        include "404.php";
}
?>

<footer>
    <?php include("footer.php"); ?>
</footer>