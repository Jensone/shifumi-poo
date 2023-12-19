<?php

namespace Models;

use DateTime;
use Models\Model;

class Story extends Model
{
    public string $result;
    public string $computerChoice;
    public string $userChoice;
    public string $date;

    /**
     * Get the value of result
     */ 
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set the value of result
     *
     * @return  self
     */ 
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get the value of computerChoice
     */ 
    public function getComputerChoice()
    {
        return $this->computerChoice;
    }

    /**
     * Set the value of computerChoice
     *
     * @return  self
     */ 
    public function setComputerChoice($computerChoice)
    {
        $this->computerChoice = $computerChoice;

        return $this;
    }

    /**
     * Get the value of userChoice
     */ 
    public function getUserChoice()
    {
        return $this->userChoice;
    }

    /**
     * Set the value of userChoice
     *
     * @return  self
     */ 
    public function setUserChoice($userChoice)
    {
        $this->userChoice = $userChoice;

        return $this;
    }

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set the value of date
     *
     * @return  self
     */ 
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Save method for a new story of the game
    */
    public function save(): void
    {
        $query = $this->pdo->prepare("INSERT INTO story (result, computerChoice, userChoice, date) VALUES (:result, :computerChoice, :userChoice, :date)");
        $query->execute([
            'result' => $this->result,
            'computerChoice' => $this->computerChoice,
            'userChoice' => $this->userChoice,
            'date' => $this->date
        ]);
    }

    // public function __toString(): string
    // {
    //     return $date->format('d/m/Y H:i:s');
    // }
}

