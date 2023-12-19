<?php

namespace Models;

class Game
{
    public array $choices = ['pierre', 'papier', 'ciseaux'];
    public string $playerChoice;
    public string $computerChoice;

    public function getChoices(): array
    {
        return $this->choices;
    }
}
