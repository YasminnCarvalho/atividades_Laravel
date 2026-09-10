@extends('layouts.app')

@section('title', 'Cadastrar Aluno')

@section('content')

<div class="container">

    <h1>Cadastrar Aluno</h1>

    <form action="{{ route('alunos.store') }}" method="POST">

        @csrf

        <div>
            <label>Nome:</label>

            <input
                type="text"
                name="nome"
                value="{{ old('nome') }}"
            >

            @error('nome')
                <p class="erro">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Email:</label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
            >

            @error('email')
                <p class="erro">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <div>
            <label>Curso:</label>

            <input
                type="text"
                name="curso"
                value="{{ old('curso') }}"
            >

            @error('curso')
                <p class="erro">{{ $message }}</p>
            @enderror
        </div>

        <br>

        <button type="submit">
            Cadastrar
        </button>

    </form>

</div>

@endsection