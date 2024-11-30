@extends('layouts.app')

@section('title', 'Lista de Transações')

@section('content')
    <h1>Lista de Transações</h1>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <a href="{{ route('transacoes.create') }}" class="btn btn-primary mb-3">Registrar Transação</a>

    @if ($transacoes->isEmpty())
        <p>Nenhuma transação registrada.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Tipo</th>
                    <th>Data</th>
                    <th>Roupa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transacoes as $transacao)
                    <tr>
                        <td>{{ $transacao->id }}</td>
                        <td>{{ $transacao->cliente->nome }}</td>
                        <td>{{ ucfirst($transacao->tipo) }}</td>
                        <td>{{ $transacao->data_operacao }}</td>
                        <td>{{ $transacao->roupa->nome }}
                           
                        </td>
                        <td>
                            <a href="{{ route('transacoes.edit', $transacao->id) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('transacoes.destroy', $transacao->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Tem certeza que deseja excluir esta transação?')">Excluir</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
