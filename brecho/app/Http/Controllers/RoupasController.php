<?php

namespace App\Http\Controllers;

use App\Models\Roupas;
use Illuminate\Http\Request;

class RoupasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        $roupas = Roupas::all();
        return view('roupas.index', compact('roupas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roupas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'nome' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'tamanho' => 'required|string|max:10',
        ]);

        // Criação da roupa
        Roupas::create($request->all());

        // Redirecionamento com mensagem de sucesso
        return redirect()->route('roupas.index')
            ->with('success', 'Roupa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $roupa = Roupas::find($id);
        return view('roupas.show', compact('roupa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
