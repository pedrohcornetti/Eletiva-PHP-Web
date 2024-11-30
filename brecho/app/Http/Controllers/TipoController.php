<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipo;

class TipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $tipos = Tipo::all(); // Recupera todos os tipos
    return view('tipos.index', compact('tipos')); // Envia para a view
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('tipos.create'); // Exibe o formulário
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'nome' => 'required|string|unique:tipos|max:255',
    ]);

    Tipo::create($request->all()); // Salva no banco

    return redirect()->route('tipos.index')->with('success', 'Tipo criado com sucesso!');
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
    $tipo = Tipo::findOrFail($id); // Busca o tipo pelo ID
    return view('tipos.edit', compact('tipo')); // Envia para a view
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $tipo = Tipo::findOrFail($id);

    $request->validate([
        'nome' => 'required|string|unique:tipos,nome,' . $tipo->id . '|max:255',
    ]);

    $tipo->update($request->all()); // Atualiza no banco

    return redirect()->route('tipos.index')->with('success', 'Tipo atualizado com sucesso!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $tipo = Tipo::findOrFail($id);
    $tipo->delete(); // Remove do banco

    return redirect()->route('tipos.index')->with('success', 'Tipo excluído com sucesso!');
}

}
