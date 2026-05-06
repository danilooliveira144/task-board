<?php

namespace App\Controllers;

use App\Models\Task;

class TaskController
{
    private $task;

    public function __construct()
    {
        $this->task = new Task();
    }

    public function store()
    {
        $data = json_decode(file_get_contents("php://input"), true);

        // Validação simples
        if (empty($data['title'])) {
            http_response_code(400);
            echo json_encode([
                "success" => false,
                "message" => "Título é obrigatório"
            ]);
            return;
        }

        $created = $this->task->create($data);

        if ($created) {
            echo json_encode([
                "success" => true,
                "message" => "Tarefa criada com sucesso"
            ]);
        } else {
            http_response_code(500);
            echo json_encode([
                "success" => false,
                "message" => "Erro ao criar tarefa"
            ]);
        }
    }
    public function index()
    {
        $tasks = $this->task->all();

        echo json_encode([
            "success" => true,
            "data" => $tasks
        ]);
    }
}