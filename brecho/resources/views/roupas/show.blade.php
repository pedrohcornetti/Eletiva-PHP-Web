@extends('layouts.app')

@section('title', 'Adicionar Nova Roupa')

@section('content')
    <h5>Excluir Categoria</h5>

    <form action="/roupas/" method="POST">
        @CSRF
        @method('DELETE')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{$roupa->nome}}" disabled/>
            </div>
            <div class="col">
                <label for="marca" class="form-label">Marca:</label>
                <input type="text" name="marca" class="form-control" value="{{$roupa->marca}}" disabled/>
            </div>
            <div class="col">
                <label for="tamanho" class="form-label">Tamanho:</label>
                <input type="text" name="tamanho" class="form-control" value="{{$roupa->tamanho}}" disabled/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <!-- Substituindo o botão "Salvar" por um botão de "Voltar" -->
                <button type="button" class="btn btn-secondary" onclick="history.back();">
                    Voltar
                </button>
            </div>
        </div>
    </form>

@endsection
