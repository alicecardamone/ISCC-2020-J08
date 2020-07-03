<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <?php
    if (isset($_POST["submit"]) && (!empty($_POST['name']) || !empty($_POST['email']) != "" || !empty($_POST['Message'] != ""))) {
        echo '<p> Prénom : ' . $_POST['name'] . '<p>';
        echo '<p> Email : ' . $_POST['email'] . '</p>';
        echo '<p> Message : ' . $_POST['Message'] . '</p>';
    } else {
        echo "Aucunes données reçues.";
    }

    ?>
</body>