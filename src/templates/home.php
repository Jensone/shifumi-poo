<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Shifumi PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>

<body>
    <div class="container">
        <aside>
            <h4>Historique</h4>
        </aside>
        <main>
            <h1>Shifumi</h1>
            <h5>Partie n°<?= 'X' ?></h5>
            <form action="play.php" method="post">
                <?php
                foreach ($choices as $choice) {
                    echo '<input type="submit" name="' . $choice . '" value="' . ucfirst($choice) . '" class="choice">';
                }
                ?>
            </form>
        </main>
    </div>
</body>

</html>