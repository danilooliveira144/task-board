<?php

require_once '../app/Core/Database.php';

use App\Core\Database;

$db = Database::connect();

echo 'Conexão funcionando';