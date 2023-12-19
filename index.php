<?php 

require_once __DIR__ . '/src/autoloading.php';

use Models\Story;
use Models\Game;

$stories = (new Story())->getAll('Story');
$choices = (new Game())->getChoices();

include __DIR__ . '/src/templates/home.php';