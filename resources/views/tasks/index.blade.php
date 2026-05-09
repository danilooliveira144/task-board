@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')

<!--<nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="https://tse1.mm.bing.net/th/id/OIP.FRr6BxL244MtvQqAVxMFZgHaHa?rs=1&pid=ImgDetMain&o=7&rm=3" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Task Board
          </a>
        </div>
      </nav>-->

<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
    <div>
        <h1 class="fw-bold">Lista de Tarefas</h1>
        <p class="text-secondary">Gerencie suas tarefas</p>
    </div>

    <a href="{{ route('tasks.create') }}" class="btn btn-success px-4 py-2">
        Criar Tarefa <i class="bi bi-plus-lg"></i>
    </a>
</div>
<!--
<div class="dark-card p-4 mb-4">
    <input
        type="text"
        class="form-control custom-input"
        placeholder="Filtrar tarefas..."
    >
</div>
-->
<div class="d-flex flex-column gap-3">

    @foreach($tasks as $task)
        <div class="task-card p-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
            <div>
                <h5 class="mb-1">{{ $task->title }}</h5>
                <small class="text-secondary">
                    {{ $task->data_inicio }} - {{ $task->data_fim }}
                </small>
            </div>

            <div class="d-flex gap-2 flex-wrap">
                <a
                    href="{{ route('tasks.show', $task->id) }}"
                    class="btn btn-primary"
                >
                    <i class="bi bi-eye-fill"></i>
                </a>

                <a
                    href="{{ route('tasks.edit', $task->id) }}"
                    class="btn btn-warning"
                >
                    <i class="bi bi-pencil-fill"></i>
                </a>

                <form
                    action="{{ route('tasks.destroy', $task->id) }}"
                    method="POST"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        <i class="bi bi-trash-fill"></i>
                    </button>
                </form>
            </div>
        </div>
    @endforeach

</div>

@endsection