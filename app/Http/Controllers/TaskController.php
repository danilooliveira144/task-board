<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Lista de tarefas
     */
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Tela de criação
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Salvar tarefa
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'data_inicio' => 'nullable|date',
            'data_fim' => 'nullable|date',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index');
    }

    /**
     * Detalhe
     */
    public function show(string $id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.show', compact('task'));
    }

    /**
     * Tela editar
     */
    public function edit(string $id)
    {
        $task = Task::findOrFail($id);

        return view('tasks.edit', compact('task'));
    }

    /**
     * Atualizar
     */
    public function update(Request $request, string $id)
    {
        $task = Task::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'data_inicio' => 'nullable|date',
            'data_fim' => 'nullable|date',
        ]);

        $task->update($validated);

        return redirect()->route('tasks.show', $task->id);
    }

    /**
     * Excluir
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return redirect()->route('tasks.index');
    }
}