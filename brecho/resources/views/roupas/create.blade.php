<!-- resources/views/roupas/create.blade.php -->

@extends('layouts.app')

@section('title', 'Adicionar Nova Roupa')

@section('content')
    <h1>Adicionar Nova Roupa</h1>

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

    <form action="{{ route('roupas.store') }}" method="POST">
        @csrf

        <div class="form-group mb-3">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="form-control" placeholder="Nome da roupa" value="{{ old('nome') }}">
        </div>

        <div class="form-group mb-3">
            <label for="marca">Marca:</label>
            <input type="text" name="marca" class="form-control" placeholder="Marca da roupa" value="{{ old('marca') }}">
        </div>

        <div class="form-group mb-3">
            <label for="tamanho">Tamanho:</label>
            <input type="text" name="tamanho" class="form-control" placeholder="Tamanho da roupa" value="{{ old('tamanho') }}">
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="{{ route('roupas.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
@endsection
