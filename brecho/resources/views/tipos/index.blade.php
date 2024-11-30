@extends('layouts.app')

@section('title', 'Tipos de Roupas')

@section('content')
    <h1>Tipos de Roupas</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <a href="{{ route('tipos.create') }}" class="btn btn-primary mb-3">Adicionar Tipo</a>

    @if ($tipos->isEmpty())
        <p>Nenhum tipo cadastrado.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipos as $tipo)
                    <tr>
                        <td>{{ $tipo->id }}</td>
                        <td>{{ $tipo->nome }}</td>
                        <td>
                            <a href="{{ route('tipos.edit', $tipo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('tipos.destroy', $tipo->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir este tipo?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
