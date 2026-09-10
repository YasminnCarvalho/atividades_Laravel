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