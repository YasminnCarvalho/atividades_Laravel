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

Route::get('/produto/{id}', function ($id) {
    return "Você está vendo o produto de ID: $id";
});

Route::get('/categoria/{id}', function ($id) {
    return "Você está vendo a categoria de ID: $id";
});

Route::get('/usuario/{id}', function ($id) {
    return "Você está vendo o usuário de ID: $id";
});

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{
    public function index()
    {
        return "Listagem de alunos";
    }


    public function create()
    {
        return "Formulário de criação de aluno";
    }


    public function store(Request $request)
    {
        return "Aluno salvo com sucesso";
    }


    public function show($id)
    {
        return "Detalhes do aluno de ID: $id";
    }


    public function edit($id)
    {
        return "Formulário de edição do aluno de ID: $id";
    }


    public function update(Request $request, $id)
    {
        return "Aluno de ID: $id atualizado com sucesso";
    }


    public function destroy($id)
    {
        return "Aluno de ID: $id apagado com sucesso";
    }
}