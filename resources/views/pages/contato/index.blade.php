@extends('layouts.app')

<link href="{{ asset('css/crud.css') }}" rel="stylesheet">

@section('content')

    <h2>Contatos</h2>
    <hr />
    <a href="{{ route('contato.create') }}">Novo Contato</a>
    <table>
        <thead>
            <tr>
                <th>#Id</th>
                <th>Foto</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contato as $contatos)
            <tr>
                <th>{{ $contatos->id }}</th>
                <td><img src="{{ asset('storage') }}/{{ $contatos->path }}" alt="foto" id="foto"></td>
                <td>{{ $contatos->nome }}</td>
                <td>{{ $contatos->email }}</td>
                <td>{{ $contatos->telefone }}</td>
                <td>
                    <a href="{{ route('contato.edit',$contatos->id)}}">Editar</a>
                    <a href="{{ route('contato.show',$contatos->id)}}">Ver</a>
                    <a href="{{ route('contato.delete',$contatos->id)}}">Remover</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
