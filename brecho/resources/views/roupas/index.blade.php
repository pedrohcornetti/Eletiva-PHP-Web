<!-- resources/views/roupas/index.blade.php -->

@extends('layouts.app')

@section('title', 'Lista de Roupas')

@section('content')
    <h1>Lista de Roupas</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <a href="{{ route('roupas.create') }}" class="btn btn-primary mb-3">Adicionar Roupa</a>

    @if ($roupas->isEmpty())
        <p>Nenhuma roupa cadastrada.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Marca</th>
                    <th>Tamanho</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roupas as $roupa)
                    <tr>
                        <td>{{ $roupa->id }}</td>
                        <td>{{ $roupa->nome }}</td>
                        <td>{{ $roupa->marca }}</td>
                        <td>{{ $roupa->tamanho }}</td>
                        <td>
                            <a href="{{ route('roupas.show', $roupa->id) }}" class="btn btn-info btn-sm">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
