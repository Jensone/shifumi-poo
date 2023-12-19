<?php include_once __DIR__ . '/components/header.php'; ?>

<div class="result">
    <?php
    if ($result['result'] == 'Gagné') {
        echo '<h1>Vous avez gagné</h1>';
        echo '<img src="https://api.iconify.design/fluent-emoji-flat:beaming-face-with-smiling-eyes.svg" alt="Gagné" width=120>';
    } elseif ($result['result'] == 'Perdu') {
        echo '<h1>Vous avez perdu</h1>';
        echo '<img src="https://api.iconify.design/fluent-emoji-flat:anguished-face.svg" alt="Perdu" width=120>';
    } else {
        echo '<h1>Match nul</h1>';
        echo '<img src="https://api.iconify.design/fluent-emoji-flat:astonished-face.svg" alt="Match nul" width=120>';
    }
    ?>
</div>

<a href="/" class="btn">Refaire une partie</a>

<?php include_once __DIR__ . '/components/footer.php'; ?>