<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobre', function () {
    return 'Esta é a página sobre o projeto de alunos.';
});

Route::get('/alunos', function () {
    return 'Esta é a página de listagem de alunos.';
});

Route::get('/contato', function () {
    return 'Entre em contato: contato@escola.com';
});