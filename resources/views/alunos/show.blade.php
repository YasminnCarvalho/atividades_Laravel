@extends('layouts.app')

@section('title', 'Aluno')

@section('content')

<div class="container">

    <h1>Detalhes do Aluno</h1>

    <p>
        <strong>ID:</strong>
        {{ $aluno->id }}
    </p>

    <p>
        <strong>Nome:</strong>
        {{ $aluno->nome }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $aluno->email }}
    </p>

    <p>
        <strong>Curso:</strong>
        {{ $aluno->curso }}
    </p>

    <a href="{{ route('alunos.index') }}">
        Voltar
    </a>

</div>

@endsection