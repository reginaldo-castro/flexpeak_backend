<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producao;

class ProducaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cadastrar(Request $request){
        
        try {
            $producao = new Producao();
            $producao->id_fragrancia = $request->id_fragrancia;
            $producao->fragrancia_qtd = $request->fragrancia_qtd;
            $producao->alcool_qtd = $request->alcool_qtd;
            $producao->agua_qtd = $request->agua_qtd;
            $producao->descricao = $request->descricao;
            $producao->qtd_produzida = $request->qtd_produzida;
            $producao->save();
            return ['sucess'=> true];
        } catch (\Exception $error) {
            return ['error'=> $error];
        }

    }

    public function getAll(){
        $producao = Producao::all('id', 'id_fragrancia', 'fragrancia_qtd', 'alcool_qtd', 'agua_qtd', 'descricao','qtd_produzida');
        return $producao;

    }

   
}
