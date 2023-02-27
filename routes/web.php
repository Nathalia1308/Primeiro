<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {return view('welcome');});

// Route::get('/teste', 'Main@index');
// Route::get('/user','Main@user');
// // Route::get('/teste', 'App\Http\Controllers\Main@index');
// Route::view('/pagina', 'pagina');
// Route::view('/pagina1', 'pagina1');
// //Route::view('/pagina2', 'pagina2', ['nome'=>'Nathalia Barros']);
// Route::get('/pagina2','Main@mostrarNome');

Route::get('/user/{nome}', function ($nome){
    // echo 'Nome: '. $nome.''.$apelido;
    echo "Nome: $nome ";
});

// Route::get('/user/{nome}/{apelido}', function ($nome, $apelido){
//     // echo 'Nome: '. $nome.''.$apelido;
//     echo "Nome: $nome $apelido";
// });
// Route::get('/user/{nome}/{apelido}', 'Main@user');

Route::get('/nome/{nome}/{idade}/{apelido?}', 'Main@nome');
