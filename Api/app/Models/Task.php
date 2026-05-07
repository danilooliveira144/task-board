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
    public function all()
    {
        $query = $this->db->query("SELECT * FROM tasks ORDER BY id DESC");
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $query = $this->db->prepare("DELETE FROM tasks WHERE id = :id");

        return $query->execute([
            ':id' => $id
        ]);
    }

    public function update($id, $data)
    {
        $query = $this->db->prepare("
            UPDATE tasks
            SET
                title = :title,
                description = :description,
                data_inicio = :data_inicio,
                data_fim = :data_fim
            WHERE id = :id
        ");

        return $query->execute([
            ':title' => $data['title'],
            ':description' => $data['description'],
            ':data_inicio' => $data['data_inicio'],
            ':data_fim' => $data['data_fim'],
            ':id' => $id
        ]);
    }
}