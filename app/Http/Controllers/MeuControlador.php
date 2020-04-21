<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeuControlador extends Controller
{
    public function produtos() {
        echo "<h1>Hello world</h1>";
    }

    public function getNome () {
        return "kaike batista da silva";
    }

    public function multiplicar ($n1, $n2) {
        return "<h1>".($n1*$n2)."</h1>";
    }
}
