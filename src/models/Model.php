<?php
/**
 * Model est une classe abstraite qui sert de parent à toutes les classes de modèles.
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

    public function getAll($table, ?string $order): array
    {
        if ($order) {
            if ($order === 'ASC' || $order === 'DESC') {
                $query = $this->pdo->query("SELECT * FROM $table ORDER BY date $order");
                return $query->fetchAll();
            }
        } else {
            $query = $this->pdo->query("SELECT * FROM $table");
            return $query->fetchAll();
        }
    }

    public function countAll($table): int
    {
        $query = $this->pdo->query("SELECT COUNT(*) FROM $table");
        return $query->fetchColumn();
    }

}
