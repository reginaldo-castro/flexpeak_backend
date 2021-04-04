<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;

class EstoqueController extends Controller
{
    public function cadastrar(Request $request){
        try {
            $ingrediente = new Estoque();
            $ingrediente->quantidade_ml = $request->quantidade_ml;
            $ingrediente->descricao = $request->descricao;
            $ingrediente->save();
            return ['sucess'=> true];
        } catch (\Exception $error) {
            return ['error'=> $error];
        }
    }

    public function getAll(){
        $ingrediente = Estoque::all('id', 'quantidade_ml','descricao');
        return $ingrediente;
    }
    
    public function getId($id){
        $ingrediente = Estoque::find($id);
        return $ingrediente;

        
    }

    public function atualizar(Request $request, $id){
        try {
            $ingrediente = Estoque::find($id);
            $ingrediente->quantidade_ml = $request->quantidade_ml;
            $ingrediente->descricao = $request->descricao;
            $ingrediente->update();
            return ['success'=> true];
        } catch (\Exception $error) {
            return ['error'=> $error];
        }
    }

    public function deletar($id){
        try {
            $ingrediente = Estoque::find($id);
            $ingrediente->delete();
            return ['success'=>true];
        } catch (\Exception $error) {
            return ['error'=> $error];
        }
    }
}
