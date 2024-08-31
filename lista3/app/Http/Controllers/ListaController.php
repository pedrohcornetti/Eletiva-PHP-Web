<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function mostrarExer1()
    {
        return view('exer1');
    }
    public function calcularExer1(Request $request)
    {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1+$valor2;
    }

    public function mostrarExer2()
    {
        return view('exer2');
    }
    public function calcularExer2(Request $request)
    {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1-$valor2;
    }

    public function mostrarExer3()
    {
        return view('exer3');
    }
    public function calcularExer3(Request $request)
    {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        return $valor1*$valor2;
    }

    
}

