<?php

namespace App\Http\Controllers;

use App\Models\Transacoes;
use App\Models\Cliente;
use Illuminate\Http\Request;
use App\Models\Roupas;

class TransacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $transacoes = Transacoes::with(['cliente', 'roupa'])->get(); // Carrega transações com roupas e cliente
    return view('transacoes.index', compact('transacoes'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $clientes = Cliente::all(); // Lista de clientes
    $roupas = Roupas::all(); // Lista de roupas
    return view('transacoes.create', compact('clientes', 'roupas'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Cria a transação
    $transacao = Transacoes::create($request->all());

    return redirect()->route('transacoes.index')->with('success', 'Transação registrada com sucesso!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $transacao = Transacoes::with(['roupa','cliente'])->findOrFail($id);
    $clientes = Cliente::all();
    $roupas = Roupas::all();
    return view('transacoes.edit', compact('transacao', 'clientes', 'roupas'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $transacao = Transacoes::findOrFail($id);

    // Atualiza a transação
    $transacao->update($request->all());


    return redirect()->route('transacoes.index')->with('success', 'Transação atualizada com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $transacao = Transacoes::findOrFail($id);
    $transacao->delete();

    return redirect()->route('transacoes.index')->with('success', 'Transação excluída com sucesso!');
}

}
