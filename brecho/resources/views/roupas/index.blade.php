<!-- resources/views/roupas/index.blade.php -->

@extends('layouts.app')

@section('title', 'Lista de Roupas')

@section('content')
    <h1>Lista de Roupas</h1>

    <!-- Exibição de Mensagens de Sucesso -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <!-- Botão para Adicionar Nova Roupa -->
    <a href="{{ route('roupas.create') }}" class="btn btn-primary mb-3">Adicionar Roupa</a>

    <!-- Verifica se há roupas cadastradas -->
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
                            <!-- Botão Ver -->
                            <a href="{{ route('roupas.show', $roupa->id) }}" class="btn btn-info btn-sm">Ver</a>

                            <!-- Botão Editar -->
                            <a href="{{ route('roupas.edit', $roupa->id) }}" class="btn btn-warning btn-sm">Editar</a>

                            <!-- Botão Excluir -->
                            <form action="{{ route('roupas.destroy', $roupa->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta roupa?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
