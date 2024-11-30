@extends('layouts.app')

@section('title', 'Editar Transação')

@section('content')
    <h1>Editar Transação</h1>

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

    <form action="{{ route('transacoes.update', $transacao->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="cliente_id" class="form-label">Cliente</label>
            <select name="cliente_id" class="form-control" required>
                <option value="">Selecione um cliente</option>
                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}" {{ $transacao->cliente_id == $cliente->id ? 'selected' : '' }}>
                        {{ $cliente->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de Transação</label>
            <select name="tipo" class="form-control" required>
                <option value="venda" {{ $transacao->tipo == 'venda' ? 'selected' : '' }}>Venda</option>
                <option value="troca" {{ $transacao->tipo == 'troca' ? 'selected' : '' }}>Troca</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="data_operacao" class="form-label">Data da Operação</label>
            <input type="date" class="form-control" name="data_operacao" value="{{ $transacao->data_operacao }}" required>
        </div>

        <div class="mb-3">
            <label for="roupa_id" class="form-label">Roupas Envolvidas</label>
            <select name="roupa_id" class="form-control" required>
                @foreach ($roupas as $roupa)
                <option value="{{ $roupa->id }}" {{ $transacao->roupa_id == $roupa->id ? 'selected' : '' }}>
                        {{ $roupa->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </form>
@endsection
