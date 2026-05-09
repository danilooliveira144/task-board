@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')

<h1>Tela de editar tarefa</h1>

<div class="form-container">
    <form
        action="{{ route('tasks.update', $task->id) }}"
        method="POST"
        class="task-form"
    >
        @csrf
        @method('PUT')

        <input
            type="text"
            name="title"
            value="{{ $task->title }}"
            class="input"
        >

        <textarea
            name="description"
            class="input"
        >{{ $task->description }}</textarea>

        <input
            type="date"
            name="start_date"
            value="{{ $task->start_date }}"
            class="input"
        >

        <input
            type="date"
            name="end_date"
            value="{{ $task->end_date }}"
            class="input"
        >

        <div class="form-actions">
            <a href="{{ route('tasks.index') }}" class="btn">
                Cancelar
            </a>

            <button type="submit" class="btn">
                Salvar
            </button>
        </div>
    </form>
</div>

@endsection