<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivroController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('home');
});

Route::resource('livros', LivroController::class);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/formulario', function () {
//     return " ";
// });




// Route::get('/contato/{id}/{nome}', function ($id, $nome) {
//     echo "Ola o seu id é $id e o seu nome é $nome";
//     echo "Ola o seu id é $id";
// })->where('id', '[0-9]+');

// Route::get('/rotas', [RotasController::class, 'index']);
// Route::post('/contato',[RotasController::class, 'processa']);
// Route::resource ('livro', LivroController::class);


