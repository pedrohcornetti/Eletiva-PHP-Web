@extends('layouts.app')

@section('title', 'Editar Tipo')

@section('content')
    <h1>Editar Tipo de Roupa</h1>

    <form action="{{ route('tipos.update', $tipo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ $tipo->nome }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
@endsection
