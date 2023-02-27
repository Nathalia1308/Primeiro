<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Main extends Controller
{
    // Route::get('/nome/{nome}/{idade}/{apelido?}', 'Main@nome');
    //     public function  nome($nome, $idade, $apelido = ''){
    //     return view('nome',['nome' => $nome, 'apelido'=>$apelido, 'idade'=>$idade]);

    // }
    public function home(){
        echo '<h3>HOME</h3>';
        echo '<hr>';
        echo '<a href="'.route('inicio').'">Home</a><br>';
        echo '<a href="'.route('servicos').'">Serviços</a><br>';
        echo '<a href="'.route('contactos').'">Contactos</a><br>';
    }
    public function servicos(){
        echo '<h3>SERVIÇOS</h3>';
        echo '<hr>';
        echo '<a href="'.route('inicio').'">Home</a><br>';
        echo '<a href="'.route('servicos').'">Serviços</a><br>';
        echo '<a href="'.route('contactos').'">Contactos</a><br>';
    }
    public function contactos(){
        echo '<h3>CONTACTOS</h3>';
        echo '<hr>';
        echo '<a href="'.route('inicio').'">Home</a><br>';
        echo '<a href="'.route('servicos').'">Serviços</a><br>';
        echo '<a href="'.route('contactos').'">Contactos</a><br>';
    }
}
