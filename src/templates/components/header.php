<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://api.iconify.design/fluent-emoji-flat:beaming-face-with-smiling-eyes.svg" type="image/x-icon">
    <title>Shifumi PHP</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&family=Rubik+Doodle+Shadow&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <script src="/assets/main.js" defer></script>
</head>

<body>
    <div class="container">
        <aside>
            <div class="history">
                <h4>Historique</h4>
            </div>
            <table>
                <thead>
                    <tr>
                        <td>Le résultat</td>
                        <td>Vous avez joué</td>
                        <td>Dernière partie</td>
                    </tr>
                </thead>
                <tbody>
                    <?php include_once __DIR__ . '/_partials/_stories.php'; ?>
                </tbody>
            </table>
        </aside>
        <main>