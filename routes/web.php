<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatGPTController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/estrategias', function () {
        return view('pages.estrategias');
    })->name('estrategias');

    Route::get('/riesgos', function () {
        return view('pages.riesgos');
    })->name('riesgos');

    Route::get('/crm', function () {
        return view('pages.crm');
    })->name('crm');

    Route::get('/rendimiento', function () {
        return view('pages.rendimiento');
    })->name('rendimiento');

    Route::get('/rse', function () {
        return view('pages.rse');
    })->name('rse');

    Route::get('/cmi', function () {
        return view('pages.cmi');
    })->name('cmi');

    // Ruta para manejar la consulta a GPT
    Route::post('/ask-gpt', [ChatGPTController::class, 'askGPT'])->name('ask.gpt');
});
