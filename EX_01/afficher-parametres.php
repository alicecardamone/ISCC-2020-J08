<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <ul>
        <?php
        foreach ($_GET as $key => $value) {

            echo "<li>clé: $key, valeur:$value</li>";
        }

        ?>
    </ul>
</body>

</html>