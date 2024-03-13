<?php

use App\Http\Controllers\AlunosController;
use App\Http\Controllers\TurmasController;
use App\Models\Turmas;
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

Route::get('/', function () {
    return redirect('/alunos');
});

Route::get('/alunos', [AlunosController::class, 'index']);
Route::get('/alunos/cadastrar', [AlunosController::class, 'create']);
Route::get('/alunos/{id}/editar', [AlunosController::class, 'edit']);
Route::post('/alunos', [AlunosController::class, 'store']);
Route::put('/alunos/{id}', [AlunosController::class, 'update']);
Route::delete('/alunos/{id}', [AlunosController::class, 'destroy']);



Route::get('/turmas', [TurmasController::class, 'index']);
Route::get('/turmas/cadastrar', [TurmasController::class, 'create']);
Route::get('/turmas/{id}/editar', [TurmasController::class, 'edit']);
Route::post('/turmas', [TurmasController::class, 'store']);
Route::put('/turmas/{id}', [TurmasController::class, 'update']);
Route::delete('/turmas/{id}', [TurmasController::class, 'destroy']);

