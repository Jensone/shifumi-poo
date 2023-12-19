<?php
foreach ($stories as $story) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($story['result']) . '</td>';
    echo '<td>' . ucfirst(htmlspecialchars($story['userChoice'])) . '</td>';
    
    $storyDate = DateTime::createFromFormat('d/m/Y H:i:s', $story['date']);
    
    if ($storyDate) {
        $now = new DateTime('now');
        $interval = $now->diff($storyDate);
        echo '<td> Il y a ' . $interval->format('%i') . ' min.</td>';
    } else {
        echo '<td>Erreur dans le format de la date</td>';
    }
    
    echo '</tr>';
}
?>
