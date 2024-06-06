<?php

use App\Http\Controllers\AcessoController;
use App\Http\Controllers\ContratantesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\FaturamentoController;
use App\Http\Controllers\MusicosController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware([
    'auth:sanctum'
])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::group(['prefix' => 'downloads'], function () {
        Route::get('/last/semana', [DownloadsController::class, 'getDownloadsUltimaSemana'])->name('downloads.last.semana');
        Route::get('/last/mes', [DownloadsController::class, 'getDownloadsUltimoMes'])->name('downloads.last.mes');
        Route::get('/last/trimestre', [DownloadsController::class, 'getDownloadsUltimoTrimestre'])->name('downloads.last.trimestre');
        Route::get('/last/semestre', [DownloadsController::class, 'getDownloadsUltimoSemestre'])->name('downloads.last.semestre');
        Route::get('/', [DownloadsController::class, 'getDownloadsDesdeInicio'])->name('downloads.desde.inicio');
    });

    Route::group(['prefix' => 'acessos'], function () {
        Route::get('/last/semana', [AcessoController::class, 'getAcessosUltimaSemana'])->name('acessos.last.semana');
        Route::get('/last/mes', [AcessoController::class, 'getAcessosUltimoMes'])->name('acessos.last.mes');
        Route::get('/last/trimestre', [AcessoController::class, 'getAcessosUltimoTrimestre'])->name('acessos.last.trimestre');
        Route::get('/last/semestre', [AcessoController::class, 'getAcessosUltimoSemestre'])->name('acessos.last.semestre');
        Route::get('/', [AcessoController::class, 'getAcessosDesdeInicio'])->name('acessos.desde.inicio');
    });

    Route::group(['prefix' => 'musicos'], function () {
        Route::get('/last/semana', [MusicosController::class, 'getMusicosUltimaSemana'])->name('musicos.last.semana');
        Route::get('/last/mes', [MusicosController::class, 'getMusicosUltimoMes'])->name('musicos.last.mes');
        Route::get('/last/trimestre', [MusicosController::class, 'getMusicosUltimoTrimestre'])->name('musicos.last.trimestre');
        Route::get('/last/semestre', [MusicosController::class, 'getMusicosUltimoSemestre'])->name('musicos.last.semestre');
        Route::get('/', [MusicosController::class, 'getMusicosDesdeInicio'])->name('musicos.desde.inicio');
    });

    Route::group(['prefix' => 'cotratantes'], function () {
        Route::get('/last/semana', [ContratantesController::class, 'getContratantesUltimaSemana'])->name('contratantes.last.semana');
        Route::get('/last/mes', [ContratantesController::class, 'getContratantesUltimoMes'])->name('contratantes.last.mes');
        Route::get('/last/trimestre', [ContratantesController::class, 'getContratantesUltimoTrimestre'])->name('contratantes.last.trimestre');
        Route::get('/last/semestre', [ContratantesController::class, 'getContratantesUltimoSemestre'])->name('contratantes.last.semestre');
        Route::get('/', [ContratantesController::class, 'getContratantesDesdeInicio'])->name('contratantes.desde.inicio');
    });

    Route::group(['prefix' => 'transacoes'], function () {
        Route::get('/last/semana', [FaturamentoController::class, 'getFaturametosUltimaSemana'])->name('transacoes.last.semana');
        Route::get('/last/mes', [FaturamentoController::class, 'getFaturametosUltimoMes'])->name('transacoes.last.mes');
        Route::get('/last/trimestre', [FaturamentoController::class, 'getFaturametosUltimoTrimestre'])->name('transacoes.last.trimestre');
        Route::get('/last/semestre', [FaturamentoController::class, 'getFaturametosUltimoSemestre'])->name('transacoes.last.semestre');
        Route::get('/', [FaturamentoController::class, 'getFaturametosDesdeInicio'])->name('transacoes.desde.inicio');
    });
});

Route::post('/login', [UserController::class, 'login'])->name('login');
