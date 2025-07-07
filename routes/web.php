<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProcessedController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\UserDataController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('inicio');

Route::get('/arquivos', [FileController::class, 'index'])->name('arquivos');
Route::get('/processados', [ProcessedController::class, 'index'])->name('processados');
Route::get('/guia', [GuideController::class, 'index'])->name('guia');
Route::get('/auditoria', [AuditController::class, 'index'])->name('auditoria');
Route::get('/equipe', [TeamController::class, 'index'])->name('equipe');
Route::get('/painel-adm', [AdminPanelController::class, 'index'])->name('painel-adm');
Route::get('/meus-dados', [UserDataController::class, 'index'])->name('meus-dados');

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
