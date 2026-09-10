@extends('layouts.app')

@section('title', 'Alunos')

@section('content')

<div class="container">

    <h1>Lista de Alunos</h1>

    <a href="{{ route('alunos.create') }}">
        Cadastrar novo aluno
    </a>

    <hr>

    @if($alunos->count() > 0)

        <table border="1" cellpadding="10">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Curso</th>
                    <th>Ações</th>
                </tr>
            </thead>

            <tbody>

                @foreach($alunos as $aluno)

                    <tr>
                        <td>{{ $aluno->id }}</td>
                        <td>{{ $aluno->nome }}</td>
                        <td>{{ $aluno->email }}</td>
                        <td>{{ $aluno->curso }}</td>

                        <td>
                            <a href="{{ route('alunos.show', $aluno->id) }}">
                                Ver
                            </a>
                        </td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    @else

        <p>Nenhum aluno cadastrado.</p>

    @endif

</div>

@endsection