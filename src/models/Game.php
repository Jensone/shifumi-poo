<?php

namespace Models;

class Game
{
    public array $choices = ['feu', 'herbe', 'eau'];
    public string $playerChoice;
    public string $computerChoice;

    public function getChoices(): array
    {
        return $this->choices;
    }

    public function computerChoice(): string
    {
        return $this->choices[rand(0, 2)];
    }

    public function play($user)
    {
        $result = [];
        $computer = $this->computerChoice();
        if ($computer == $user) 
        {
            $result = [
                'result' => 'Match nul',
                'computer' => $computer
            ];
        } elseif (
            $computer == 'pierre' && $user == 'ciseaux' ||
            $computer == 'papier' && $user == 'pierre' ||
            $computer == 'ciseaux' && $user == 'papier'
        ) {
            $result = [
                'result' => 'Perdu',
                'computer' => $computer
            ];
        } else {
            $result = [
                'result' => 'Gagné',
                'computer' => $computer
            ];
        }
        return $result;
    }
}
