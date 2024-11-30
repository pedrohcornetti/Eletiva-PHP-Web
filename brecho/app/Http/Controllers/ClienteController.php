<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $clientes = Cliente::all(); // Recupera todos os clientes
    return view('clientes.index', compact('clientes')); // Envia para a view
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('clientes.create'); // Exibe o formulário de criação
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:clientes|max:255',
        'telefone' => 'nullable|string|max:20',
    ]);

    Cliente::create($request->all()); // Salva no banco

    return redirect()->route('clientes.index')->with('success', 'Cliente criado com sucesso!');
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
    $cliente = Cliente::findOrFail($id); // Busca o cliente pelo ID
    return view('clientes.edit', compact('cliente')); // Envia para a view
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $cliente = Cliente::findOrFail($id);

    $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email|unique:clientes,email,' . $cliente->id,
        'telefone' => 'nullable|string|max:20',
    ]);

    $cliente->update($request->all()); // Atualiza no banco

    return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $cliente = Cliente::findOrFail($id);
    $cliente->delete(); // Remove do banco

    return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
}

}
