<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        // ✅ Validação (substitui if manual)
        $validated = $request->validate([
            'title' => 'required|string|max:255',
        ], [
            'title.required' => 'Título é obrigatório',
        ]);

        // ✅ Criação via Eloquent
        $task = Task::create($validated);

        // ✅ Resposta JSON padrão do Laravel
        return response()->json([
            "success" => true,
            "message" => "Tarefa criada com sucesso",
            "data" => $task
        ], 201);
    }
}