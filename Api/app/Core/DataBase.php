<?php

namespace App\Core;

use PDO;

class Database
{
    public static function connect()
    {
        $config = require __DIR__ . '/../../config/database.php';

        return new PDO(
            'sqlite:' . $config['database']
        );
    }
}