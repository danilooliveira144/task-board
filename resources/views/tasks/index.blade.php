@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')

<h1>Tela da lista de tarefas</h1>

<div class="top-bar">
    <div class="project-name">
        Nome do Projeto
    </div>

    <a href="{{ route('tasks.create') }}" class="btn">
        Criar tarefa
    </a>
</div>
<!--
<input
    type="text"
    class="filter-box"
    placeholder="Campo de filtro"
>
-->
<div class="task-list">

    @foreach($tasks as $task)
        <div class="task-item">
            <span>{{ $task->title }}</span>

            <div class="task-actions">
                <a href="{{ route('tasks.show', $task->id) }}" class="btn">
                    Ver tarefa
                </a>

                <form
                    action="{{ route('tasks.destroy', $task->id) }}"
                    method="POST"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn">
                        Excluir
                    </button>
                </form>
            </div>
        </div>
    @endforeach

</div>

@endsection