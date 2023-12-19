<?php
foreach ($stories as $story) {
    echo '<tr>';
    echo '<td>' . $story['result'] . '</td>';
    echo '<td>' . ucfirst($story['userChoice']) . '</td>';
    echo '</tr>';
}
