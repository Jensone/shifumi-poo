<?php include_once __DIR__ . '/components/header.php'; ?>
<h1>Shifumi</h1>
<h5>Partie n°<?= 'X' ?></h5>
<form action="" method="post">
    <?php
    foreach ($choices as $choice) {
        echo '<input type="submit" name="choice" value="' . $choice . '" class="choice">';
    }
    ?>
</form>

<?php include_once __DIR__ . '/components/footer.php'; ?>