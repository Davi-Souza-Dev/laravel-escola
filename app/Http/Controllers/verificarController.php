<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class verificarController extends Controller
{
    public function verificar(Request $request){
        $msg = null;
        $numValor = $request->numValor;

        if($numValor == 0){
            $msg = "Valor IGUAL a zero!!";
        }else if($numValor < 0){
            $msg = "Valor MENOR que zero!!";
        }else{
            $msg = "Valor MAIOR que zero!!";
        }
        
        return view('index', compact('msg'));
    }
}
