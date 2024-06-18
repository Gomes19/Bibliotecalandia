<?php


use Illuminate\Support\Facades\Route;

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

Route::middleware(['acesso'])->group(function () {

//dashboard
Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');


// Crud Utilizador
Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin.user.index');
Route::post('/user_store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('admin.user.store');
Route::post('/user_update{id}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin.user.update');
Route::get('/user_delete{id}', [App\Http\Controllers\Admin\UserController::class, 'delete'])->name('admin.user.delete');
Route::get('/user_list', [App\Http\Controllers\Admin\UserController::class, 'list'])->name('admin.user.list');

// Crud Funcionario
Route::get('/funcionario', [App\Http\Controllers\Biblioteca\FuncionarioController::class, 'index'])->name('biblioteca.user.index');
Route::post('/funcionario_store', [App\Http\Controllers\Biblioteca\FuncionarioController::class, 'store'])->name('biblioteca.user.store');
Route::post('/funcionario_update{id}', [App\Http\Controllers\Biblioteca\FuncionarioController::class, 'update'])->name('biblioteca.user.update');
Route::get('/funcionario_delete{id}', [App\Http\Controllers\Biblioteca\FuncionarioController::class, 'delete'])->name('biblioteca.user.delete');
Route::get('/funcionario_list', [App\Http\Controllers\Biblioteca\FuncionarioController::class, 'list'])->name('biblioteca.user.list');


// Crud Biblioteca
Route::get('/bilioteca', [App\Http\Controllers\Admin\BibliotecaController::class, 'index'])->name('admin.biblioteca.index');
Route::get('/bilioteca_aprovar/{id}', [App\Http\Controllers\Admin\BibliotecaController::class, 'aprovar'])->name('admin.biblioteca.aprovar');
Route::get('/bilioteca_desaprovar/{id}', [App\Http\Controllers\Admin\BibliotecaController::class, 'desaprovar'])->name('admin.biblioteca.desaprovar');
Route::get('/bilioteca_deletar/{id}', [App\Http\Controllers\Admin\BibliotecaController::class, 'delete'])->name('admin.biblioteca.delete');



// Crud Categoria
Route::get('/categoria', [App\Http\Controllers\Admin\CategoriaController::class, 'index'])->name('admin.categoria.index');
Route::post('/categoria/store', [App\Http\Controllers\Admin\CategoriaController::class, 'store'])->name('admin.categoria.store');
Route::post('/categoria_update{id}', [App\Http\Controllers\Admin\CategoriaController::class, 'update'])->name('admin.categoria.update');
Route::get('/categoria_delete{id}', [App\Http\Controllers\Admin\CategoriaController::class, 'delete'])->name('admin.categoria.delete');
Route::get('/categoria_list', [App\Http\Controllers\Admin\CategoriaController::class, 'list'])->name('admin.categoria.list');


 


// Crud Subs Categoria
Route::get('/sub_categoria', [App\Http\Controllers\Admin\SubCategoriaController::class, 'index'])->name('admin.sub_categoria.index');
Route::post('/sub_categoria_store', [App\Http\Controllers\Admin\SubCategoriaController::class, 'store'])->name('admin.sub_categoria.store');
Route::post('/sub_categoria_update{id}', [App\Http\Controllers\Admin\SubCategoriaController::class, 'update'])->name('admin.sub_categoria.update');
Route::get('/sub_categoria_delete{id}', [App\Http\Controllers\Admin\SubCategoriaController::class, 'delete'])->name('admin.sub_categoria.delete');
Route::get('/sub_categoria_list', [App\Http\Controllers\Admin\SubCategoriaController::class, 'list'])->name('admin.sub_categoria.list');


// Crud Empresa
Route::get('/empresa', [App\Http\Controllers\Admin\EmpresasController::class, 'index'])->name('admin.empresa.index');
Route::post('/empresa_store', [App\Http\Controllers\Admin\EmpresasController::class, 'store'])->name('admin.empresa.store');
Route::post('/empresa_update{id}', [App\Http\Controllers\Admin\EmpresasController::class, 'update'])->name('admin.empresa.update');
Route::get('/empresa_delete{id}', [App\Http\Controllers\Admin\EmpresasController::class, 'delete'])->name('admin.empresa.delete');
Route::get('/empresa_list', [App\Http\Controllers\Admin\EmpresasController::class, 'list'])->name('admin.empresa.list');

// Logs
Route::get('/logs', [App\Http\Controllers\Admin\LogsController::class, 'index'])->name('admin.logs.index');

// Relatorio dos livros
Route::get('/relatorio_livro', [App\Http\Controllers\Relatorios\Livraria\LivrosCongroller::class, 'index'])->name('relatorio.livros.index');
Route::post('/relatorio_livro_store', [App\Http\Controllers\Relatorios\Livraria\LivrosCongroller::class, 'store'])->name('relatorio.livros.store');


// Crud Livros
Route::get('/livros', [App\Http\Controllers\Admin\LivrosController::class, 'index'])->name('admin.livros.index');
Route::post('/livros_store', [App\Http\Controllers\Admin\LivrosController::class, 'store'])->name('admin.livros.store');
Route::post('/livros_update{id}', [App\Http\Controllers\Admin\LivrosController::class, 'update'])->name('admin.livros.update');
Route::get('/livros_delete{id}', [App\Http\Controllers\Admin\LivrosController::class, 'delete'])->name('admin.livros.delete');
Route::get('/livros_list', [App\Http\Controllers\Admin\LivrosController::class, 'list'])->name('admin.livros.list');

});

require __DIR__.'/auth.php';


// Afiliados Convite





