<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcPesoController extends Controller
{
    public function calcular(Request $request){
        // dd($request);
        $numAltura = $request->numAltura;
        $rdSexo = $request->rdSexo;
        $pesoIdeal = null;
        if($rdSexo == "Masculino"){
            $pesoIdeal = (72.7 * $numAltura) - 58;
        }else{
            $pesoIdeal = (62.1 * $numAltura) - 44.7;
        }

        $dados=[
            "numAltura" => $numAltura,
            "rdSexo" => $rdSexo,
            "pesoIdeal" => $pesoIdeal
        ];


        // ENVIANDO OS DADOS
        return view('exibir',$dados);
    }
}
