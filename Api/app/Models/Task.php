<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Task
{
    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    public function create($data)
    {
        $query = $this->db->prepare("
            INSERT INTO tasks (
                title,
                description,
                data_inicio,
                data_fim
            ) VALUES (
                :title,
                :description,
                :data_inicio,
                :data_fim
            )
        ");

        return $query->execute([
            ':title' => $data['title'],
            ':description' => $data['description'] ?? null,
            ':data_inicio' => $data['data_inicio'] ?? null,
            ':data_fim' => $data['data_fim'] ?? null
        ]);
    }
}