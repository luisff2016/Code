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
// Route::get($uri, $callback);

/*
Route::get('/', function () {
    return "Ola, seja bem vindo ao curso Laravel!";
});
*/
Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal'])->name('site.principal');

Route::get('/sobrenos', [\App\Http\Controllers\SobreNosController::class, 'sobrenos'])->name('site.sobre-nos');

Route::get('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

Route::post('/contato', [\App\Http\Controllers\ContatoController::class, 'contato'])->name('site.contato');

// nome, categoria, assunto, mensagem
// usar '?' para parametros opcionais
// usar parametros opcionais da direita para a esquerda
Route::get('/contato/{nome}/{categoria_id}', function (
    string $nome,
    int $categoria_id = 1 // 1 - 'Informação'
) {
    echo "<h3>Passando parametros: <br>- nome= $nome <br>- categoria= $categoria_id </h3>";
})->where('categoria_id', '[0-9]+')->where('nome', '[A-Za-z]+')->name('site.categoria_id');

Route::get('/ajuda', [\App\Http\Controllers\AjudaController::class, 'ajuda'])->name('site.ajuda');

Route::get('/login', function () {
    return 'Login';
})->name('site.login');

//agrupar rotas
Route::prefix('/app')->group(function () {
    Route::get('/clientes', function () {
        return 'Clientes';
    })->name('app.clientes');

    Route::get('/fornecedores', [\App\Http\Controllers\FornecedorController::class, 'index'])->name('app.fornecedores');

    Route::get('/produtos', function () {
        return 'Produtos';
    })->name('app.produtos');
});

Route::get('/rota1', function () {
    echo 'Rota1';
})->name('site.rota1');

// redirecionamento de rotas
// Route::redirect('/rota2','/rota1');

// outra forma de redirecionar
Route::get('/rota2', function () {
    return redirect()->route('site.rota1');
})->name('site.rota2');

// rota de contingencia (fallback)
Route::fallback(function(){
    echo 'A rota acessada nao existe. <a href="'.route('site.principal').'">clique aqui</a> para ir para pagina inicial';
});

// encaminhar parametros da rota para o controlador
Route::get('/teste/{p1}/{p2}', [\App\Http\Controllers\TesteController::class, 'teste'])->name('teste');






/**
 * Verbos HTTP
 * 
 * get
 * post
 * put
 * patch
 * delete
 * options
 * 
 */
