@extends('layouts.app')

@section('title', 'Detalhes da Tarefa')

@section('content')

<div class="dark-card p-5">

    <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
        <div>
            <h1 class="fw-bold">{{ $task->title }}</h1>
            <p class="text-secondary mb-0">
                {{ $task->data_inicio }} - {{ $task->data_fim }}
            </p>
        </div>

        <div class="d-flex gap-2">
            <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">
                Editar  <i class="bi bi-pencil-fill"></i>
            </a>

            <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                Voltar
            </a>
        </div>
    </div>

    <div class="details-box">
        <p class="mb-0 fs-5">
            {{ $task->description }}
        </p>
    </div>

</div>

@endsection