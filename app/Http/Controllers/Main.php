<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    // Route::get('/nome/{nome}/{idade}/{apelido?}', 'Main@nome');
        public function  nome($nome, $idade, $apelido = ''){
        return view('nome',['nome' => $nome, 'apelido'=>$apelido, 'idade'=>$idade]);

    }
}
