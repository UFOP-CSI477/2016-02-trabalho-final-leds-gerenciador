<?php

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

//Route::get('/', function () {
//    return view('admin_template');
//});
Route::get('/referencias', function () {
    return view('referencias.index');
});
Route::get('/', 'AvisoController@index');
Route::resource('/equipe', 'EquipeController');
Route::get('/perfil', 'UserController@index');
Route::get('/projetos', 'AlunoProfProjetoController@index');
Route::resource('membro', 'MembroController');
Route::resource('projeto', 'ProjetoController');
Route::resource('aviso', 'AvisoController');
Route::resource('livro', 'LivroController');
Route::resource('professors', 'ProfessorController');
Route::resource('alunos', 'AlunoController');

Route::resource('biblioteca', 'BibliotecaController');
Route::get('test', 'TestController@index');
Auth::routes();

Route::get('/noticias', 'AvisoController@index');
Route::get('/home', 'AvisoController@index');
Route::get('devolver/{id}', [
    'uses' => 'BibliotecaController@devolver'
]);

Route::get('alugar/{id}', [
    'uses' => 'BibliotecaController@alugar'
]);
