<?php 

require_once __DIR__ . '/src/autoloading.php';

use Models\Story;
use Models\Game;

$stories = (new Story())->getAll('Story', 'DESC');
$choices = (new Game())->getChoices();
$count = (new Story())->countAll('Story');

if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $result = (new Game())->play($_POST['choice']);
    if($result) {
        $story = new Story();
        $story->setResult($result['result'])
        ->setComputerChoice($result['computer'])
        ->setUserChoice($_POST['choice'])
        ->setDate((new DateTime('now'))->format('d/m/Y H:i:s'));
        $story->save();
    }
    
    include __DIR__ . '/src/templates/game.php';

} else {
    include __DIR__ . '/src/templates/home.php';
}