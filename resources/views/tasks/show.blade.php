@extends('layouts.app')

@section('title', 'Detalhe da Tarefa')

@section('content')

<h1>Tela de detalhe da tarefa</h1>

<div class="details-title">
    {{ $task->title }}
</div>

<div class="details-box">
    {{ $task->description }}
</div>

<div class="date-box">
    {{ $task->start_date }} até {{ $task->end_date }}
</div>

<div class="details-actions">
    <a href="{{ route('tasks.index') }}" class="btn">
        Voltar
    </a>

    <a href="{{ route('tasks.edit', $task->id) }}" class="btn">
        Editar
    </a>
</div>

@endsection