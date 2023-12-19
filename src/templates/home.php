<?php include_once __DIR__ . '/components/header.php'; ?>
<h1>Shifumi</h1>
<h5>Partie n°<?= $count ? $count : '00' ?></h5>
<form action="" method="post">
    <?php
    foreach ($choices as $choice) {
        echo '<input type="submit" name="choice" value="' . $choice . '" class="choice" data-choice="' . $choice . '">';
    }
    ?>
</form>

<?php include_once __DIR__ . '/components/footer.php'; ?>