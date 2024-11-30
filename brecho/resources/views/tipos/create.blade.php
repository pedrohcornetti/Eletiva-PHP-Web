@extends('layouts.app')

@section('title', 'Adicionar Tipo')

@section('content')
    <h1>Adicionar Tipo de Roupa</h1>

    <form action="{{ route('tipos.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>
@endsection
