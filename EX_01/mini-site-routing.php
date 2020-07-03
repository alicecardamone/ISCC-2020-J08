<html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>mini-site-routing</title>
    <link rel="stylesheet" href="style.css">
</head>

<header>
    <nav id="Menu">
        <ul>
            <li><a href="mini-site-routing.php?page=1&">Accueil</a></li>
            <li><a href="mini-site-routing.php?page=2&">Page 2</a></li>
            <li><a href="mini-site-routing.php?page=3&">Page 3</a></li>
        </ul>
    </nav>
</header>

<body>
    <?php
    if ($_GET['page'] == 1) {
        echo "<h1>Accueil</h1>";
    }

    if ($_GET['page'] == 2) {
        echo "<h1>Page 2</h1>";
    }

    if ($_GET['page'] == 3) {
        echo "<h1>Page 3</h1>";
    } ?>
</body>