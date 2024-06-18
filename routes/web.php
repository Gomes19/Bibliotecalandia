<?php

use App\Http\Controllers\CategoriaBibliotecaController;
use App\Http\Controllers\CategoriaJogoController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\questoesinicio;
use App\Http\Controllers\QuestoesInicioController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Console\Question\Question;

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

Route::get('/', [App\Http\Controllers\Site\HomeController::class, 'index'])->name('site.index');

Route::match(['GET', 'POST'],'/cadastro/livro', [App\Http\Controllers\Biblioteca\LivrosController::class, 'associarRfid'])->name('livros.associarRfid');
Route::get('/rfid', [App\Http\Controllers\Biblioteca\LivrosController::class, 'rfid'])->name('livros.rfid');

Route::get('/e_rfid', [App\Http\Controllers\Biblioteca\LivrosController::class, 'e_rfid'])->name('emprestimo.rfid');


Route::get('/csrf-token', [App\Http\Controllers\Biblioteca\LivrosController::class, 'token'])->name('livros.token');


Route::post('/livros/store', [App\Http\Controllers\Biblioteca\LivrosController::class, 'associarRfid'])->name('biblioteca.associarRfid');
    

// Pesquisa
Route::any('/pesquisar/livros', [App\Http\Controllers\Site\LivrosController::class, 'search'])->name('site.pesquisa.livro');


//Perfil para clientes, motoristas e afiliados
Route::get('/perfil', [App\Http\Controllers\Site\PerfilController::class, 'index'])->name('site.perfil')->middleware('auth');
Route::post('/perfil/editar', [App\Http\Controllers\Site\PerfilController::class, 'edit'])->name('site.perfil.edit')->middleware('auth');


//Perfil para clientes, motoristas e afiliadoslivros_biblioteca
Route::get('/site_livro{id}', [App\Http\Controllers\Site\LivrosController::class, 'index'])->name('site.livro.desc');
Route::get('/biblioteca_livro{id}', [App\Http\Controllers\Site\LivrosController::class, 'livros_biblioteca'])->name('biblioteca.livro.desc');

// Sobre
Route::get('/sobre', [App\Http\Controllers\Site\SobreController::class, 'index'])->name('site.sobre');

// Serviços
Route::get('/servicos', [App\Http\Controllers\Site\ServicosController::class, 'index'])->name('site.servicos');




// COntacte-Nos
Route::get('/contacte-nos', [App\Http\Controllers\Site\ContacteController::class, 'index'])->name('site.contacte');


//CRUD CATEGORIA JOGO

Route::resource('/CategoriaJogo', CategoriaJogoController::class);
Route::resource('/questionjogo', QuestionController::class);
Route::any('/iniciojogo',[App\Http\Controllers\InicioController::class, 'index'])->name('categoria.jogo.index');



Route::any('/jogos{id}',  [App\Http\Controllers\QuestoesInicioController::class, 'index'])->name('jogo.index');
Route::any('/submitjogo{id}', [App\Http\Controllers\QuestoesInicioController::class, 'store'])->name('submitjogo.store');


Route::/*middleware(['biblioteca'])->*/prefix('bibliotecas')->group(function () {

    //Listar todas bibliotecas
    Route::get('/',[App\Http\Controllers\Biblioteca\ListarTodasController::class,'index'])->name('listar.todas.index');
    
    
    
    //Vizualizar Cada biblioteca
    Route::get('/{id}',[App\Http\Controllers\Biblioteca\ListarTodasController::class,'show'])->name('ver.biblioteca.show');
    
    Route::any('/search', [App\Http\Controllers\Biblioteca\ListarTodasController::class,'search'])->name('biblioteca.search');
    
    });


// Livraria
Route::/*middleware(['biblioteca'])->*/prefix('livraria')->group(function () {

    //Listar todos Livros da Livraria
    Route::get('/livros',[App\Http\Controllers\Site\Livraria\LivrosController::class,'index'])->name('livraria.livros.index');

    });

require __DIR__.'/auth.php';