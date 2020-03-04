<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function procurarFilmeId($id){ $filmes = [
        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
        ];
        return "o filme e :$filmes[$id]";
    }

    public function procurarFilmeNome($nome){
         $filmes = [

        1 => "Toy Story",
        2 => "Procurando Nemo",
        3 => "Avatar",
        4 => "Star Wars: Episódio V",
        5 => "Up",
        6 => "Mary e Max"
        ];

        foreach($filmes as $filme){
            if($filme == $nome){
                return $filme;
            }
        }
                return "nao encontrado";
    }
    public function listar(){
        $filmes = [

            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];   

            return view('filmes',['filmes' => $filmes]);
}
}

