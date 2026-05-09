@extends('layouts.app')

@section('title', 'Editar Tarefa')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-7">

        <div class="dark-card p-5">
            <h1 class="mb-4 fw-bold">Editando Tarefa</h1>

            <form
                action="{{ route('tasks.update', $task->id) }}"
                method="POST"
            >
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Título</label>
                    <input
                        type="text"
                        name="title"
                        value="{{ $task->title }}"
                        class="form-control custom-input"
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label">Descrição</label>
                    <textarea
                        name="description"
                        rows="6"
                        class="form-control custom-input"
                    >{{ $task->description }}</textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Data início</label>
                        <input
                            type="date"
                            name="data_inicio"
                            value="{{ $task->data_inicio }}"
                            class="form-control custom-input"
                        >
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Data final</label>
                        <input
                            type="date"
                            name="data_fim"
                            value="{{ $task->data_fim }}"
                            class="form-control custom-input"
                        >
                    </div>
                </div>

                <div class="d-flex justify-content-end gap-2 mt-4">
                    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">
                        Cancelar
                    </a>

                    <button type="submit" class="btn btn-warning px-4">
                        Salvar <i class="bi bi-floppy-fill"></i>
                    </button>
                </div>
            </form>
        </div>

    </div>
</div>

@endsection