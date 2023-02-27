<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
        // return view('pagina2', ['nome'=>'Nathalia Barros']);
        public function user($nome, $apelido){
          return view('user', ['nome' => $nome, 'apelido' => $apelido]);

        }

}
