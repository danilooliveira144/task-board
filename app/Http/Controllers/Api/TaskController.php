<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Lista tarefas
     */
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();

        return response()->json($tasks);
    }

    /**
     * Criar tarefa
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'data_inicio' => 'nullable|date',
            'data_fim' => 'nullable|date',
        ]);

        $task = Task::create($validated);

        return response()->json([
            'message' => 'Tarefa criada com sucesso',
            'data' => $task
        ], 201);
    }

    /**
     * Mostrar tarefa
     */
    public function show(string $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json([
                'message' => 'Tarefa não encontrada'
            ], 404);
        }

        return response()->json($task);
    }

    /**
     * Atualizar tarefa
     */
    public function update(Request $request, string $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json([
                'message' => 'Tarefa não encontrada'
            ], 404);
        }

        $validated = $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'nullable|string',
            'data_inicio' => 'nullable|date',
            'data_fim' => 'nullable|date',
        ]);

        $task->update($validated);

        return response()->json([
            'message' => 'Tarefa atualizada com sucesso',
            'data' => $task
        ]);
    }

    /**
     * Excluir tarefa
     */
    public function destroy(string $id)
    {
        $task = Task::find($id);

        if (!$task) {
            return response()->json([
                'message' => 'Tarefa não encontrada'
            ], 404);
        }

        $task->delete();

        return response()->json([
            'message' => 'Tarefa removida com sucesso'
        ]);
    }
}