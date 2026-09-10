@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">

    <h1>Sistema de Alunos</h1>

    <p>Bem-vindo ao sistema de gerenciamento de alunos.</p>

    <a href="{{ route('alunos.index') }}">
        Ver alunos
    </a>

</div>

@endsection