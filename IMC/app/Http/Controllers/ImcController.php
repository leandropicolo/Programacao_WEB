<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalculoDeImc;

class ImcController extends Controller
{
    
    public function index() {
        return view('consumo');
    }

    public function gasto() {
        $calculoDeImc = new CalculoDeImc();

        $valor = $calculoDeImc->calcular();

        return view('resultado', ['valor'=>$valor]);
    }
}
