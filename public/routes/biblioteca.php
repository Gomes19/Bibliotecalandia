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

Route::middleware(['biblioteca'])->prefix('biblioteca')->group(function () {

    Route::get('/funcionario', [App\Http\Controllers\Biblioteca\FuncionarioController::class, 'index'])->name('biblioteca.user.index');
    Route::post('/funcionario/store', [App\Http\Controllers\Biblioteca\FuncionarioController::class, 'store'])->name('biblioteca.user.store');
    Route::post('/funcionario/update{id}', [App\Http\Controllers\Biblioteca\FuncionarioController::class, 'update'])->name('biblioteca.user.update');
    Route::get('/funcionario/delete{id}', [App\Http\Controllers\Biblioteca\FuncionarioController::class, 'delete'])->name('biblioteca.user.delete');
    

    // Crud Partileira
    Route::get('/partileira', [App\Http\Controllers\Admin\PartileiraController::class, 'index'])->name('admin.partileira.index');
    Route::post('/categoria_store', [App\Http\Controllers\Admin\PartileiraController::class, 'store'])->name('admin.partileira.store');
    Route::post('/partileira_update{id}', [App\Http\Controllers\Admin\PartileiraController::class, 'update'])->name('admin.partileira.update');
    Route::get('/partileira_delete{id}', [App\Http\Controllers\Admin\PartileiraController::class, 'delete'])->name('admin.partileira.delete');
    Route::get('/partileira_list', [App\Http\Controllers\Admin\PartileiraController::class, 'list'])->name('admin.partileira.list');


    // Crud Livros
    Route::get('/livros', [App\Http\Controllers\Biblioteca\LivrosController::class, 'index'])->name('biblioteca.livros.index');
    Route::post('/livros/store', [App\Http\Controllers\Biblioteca\LivrosController::class, 'store'])->name('biblioteca.livros.store');
    Route::post('/livros/update{id}', [App\Http\Controllers\Biblioteca\LivrosController::class, 'update'])->name('biblioteca.livros.update');
    Route::get('/livros/delete{id}', [App\Http\Controllers\Biblioteca\LivrosController::class, 'delete'])->name('biblioteca.livros.delete');
    Route::get('/livros/list', [App\Http\Controllers\Biblioteca\LivrosController::class, 'list'])->name('biblioteca.livros.list');

    //EMPRESTIMOS
Route::get('/user/imports', [App\Http\Controllers\UsersImportController::class, 'show'])->name('biblioteca.emprestimos');
Route::post('/user/imports', [App\Http\Controllers\UsersImportController::class, 'store'])->name('biblioteca.emprestimos');
 


// Eventos
// Criar um evento
Route::get('/eventos', [App\Http\Controllers\Biblioteca\EventosController::class,'index'])->name('biblioteca.evento.index');

Route::post('/eventos/creta', [App\Http\Controllers\Biblioteca\EventosController::class,'store'])->name('biblioteca.evento.store');

// Editar um evento
Route::put('/eventos/{id}', [App\Http\Controllers\Biblioteca\EventosController::class,'update'])->name('biblioteca.evento.update');

// Excluir um evento
Route::delete('/eventos/{id}', [App\Http\Controllers\Biblioteca\EventosController::class,'destroy'])->name('biblioteca.evento.delete');


//LISTAGEM



});

require __DIR__.'/auth.php';


// Afiliados Convite





