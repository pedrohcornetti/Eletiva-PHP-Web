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

    public function mostrarExer4()
    {
        return view('exer4');
    }
    public function calcularExer4(Request $request)
    {
        $valor1 = (int)$request->input('valor1');
        $valor2 = (int)$request->input('valor2');
        if ($valor2 == 0){
            return "Não é possível dividir por zero";
        }
        return $valor1/$valor2;

    }

    public function mostrarExer5()
    {
        return view('exer5');
    }
    public function calcularExer5(Request $request)
    {
        $nota1 = (double)$request->input('nota1');
        $nota2 = (double)$request->input('nota2');
        $nota3 = (double)$request->input('nota3');
        return ($nota1+$nota2+$nota3)/3;
    }
}

