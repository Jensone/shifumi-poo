<?php
/**
 * Models est une classe abstraite qui sert de parent à toutes les classes de modèles.
 * On y rassemble les propriétés et méthodes communes à tous les modèles.
 */

namespace Models;

use Utilities\Database;

abstract class Model
{

    protected $pdo;

    public function __construct()
    {
        $this->pdo = (new Database())->getPDO();
    }

    public function getAll($table)
    {
        $query = $this->pdo->query("SELECT * FROM $table");
        return $query->fetchAll();
    }

}
