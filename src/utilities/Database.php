<?php

namespace Utilities;

use PDO;
use PDOException;

class Database
{
    public function getPDO(): ?PDO
    {
        try {
            $pdo = new PDO('sqlite:shifumi.db');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $e) {
            echo 'Connection error: ' . $e->getMessage();
            return null;
        }
    }
}