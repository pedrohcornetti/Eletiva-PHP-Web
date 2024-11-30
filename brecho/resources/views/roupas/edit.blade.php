
<!-- resources/views/roupas/create.blade.php -->

@extends('layouts.app')

@section('title', 'Editar roupa')

@section('content')
    <h1>Editar roupa</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Erro!</strong> Por favor, corrija os erros abaixo:<br><br>
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('roupas.update', $roupa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{ $roupa->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <input type="text" class="form-control" name="marca" value="{{ $roupa->marca }}" required>
        </div>

        <div class="mb-3">
            <label for="tamanho" class="form-label">Tamanho</label>
            <input type="text" class="form-control" name="tamanho" value="{{ $roupa->tamanho }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
@endsection
