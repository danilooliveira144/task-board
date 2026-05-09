@extends('layouts.app')

@section('title', 'Criar Tarefa')

@section('content')

<h1>Tela de criar tarefa</h1>

<div class="form-container">
    <form
        action="{{ route('tasks.store') }}"
        method="POST"
        class="task-form"
    >
        @csrf

        <input
            type="text"
            name="title"
            placeholder="Título"
            class="input"
        >

        <textarea
            name="description"
            placeholder="Descrição"
            class="input"
        ></textarea>

        <input
            type="date"
            name="start_date"
            class="input"
        >

        <input
            type="date"
            name="end_date"
            class="input"
        >

        <div class="form-actions">
            <a href="{{ route('tasks.index') }}" class="btn">
                Cancelar
            </a>

            <button type="submit" class="btn">
                Criar
            </button>
        </div>
    </form>
</div>

@endsection