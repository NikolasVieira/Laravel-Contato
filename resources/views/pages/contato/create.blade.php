@extends('layouts.app')

@section('content')

<h2>Adicionar um contato</h2>
<hr />
<a href="{{ route('contato.index') }}" class="btn btn-secondary mb-3">Voltar</a>

<form action="{{ route('contato.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="form-group col">
            <label for="nome">Nome do Contato</label>
            <input type="text" class="form-control {{ $errors->has('nome') ? 'is-invalid' : ''}}"
                id="nome" name="nome" placeholder="Informe o nome do contato">
            @if ($errors->has('nome'))
            <div class="invalid-feedback">
                {{$errors->first('nome','Atenção o campo é obrigatório!')}}
            </div>
            @endif
        </div>

        <div class="form-group col">
            <label for="nome">E-mail do Contato</label>
            <input type="text" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}"
                id="email" name="email" placeholder="Informe o E-mail do Contato">
            @if ($errors->has('email'))
            <div class="invalid-feedback">
                {{$errors->first('email','Atenção o campo é obrigatório!')}}
            </div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="form-group col">
            <label for="telefone">Telefone do Contato</label>
            <input type="number" class="form-control {{ $errors->has('telefone') ? 'is-invalid' : ''}}" id="telefone"
                name="telefone" placeholder="Informe o Telefone do Contato">
            @if ($errors->has('telefone'))
            <div class="invalid-feedback">
                {{$errors->first('telefone','Atenção o campo é obrigatório!')}}
            </div>
            @endif
        </div>
        <div class="form-group col">
            <label for="foto">Foto do Contato</label>
            <input type="file" class="form-control" id="foto" name="foto">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection

