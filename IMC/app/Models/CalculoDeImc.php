<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalculoDeImc extends Model
{
    public function calcular() {
        $peso = $_GET['peso'];
        $altura = $_GET['altura'];

        

        $imc = ($peso / ($altura * $altura));

        return $imc;

    }
}