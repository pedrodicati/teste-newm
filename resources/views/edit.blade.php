@extends('layouts.main')
@section('title', 'Editando ' . $client->id )
@section('content')
    <div id="client-create-container" class="col-md-6 offset-md-3">
        <h1>Edição do cliente: {{ $client->name }}</h1>
        <form action="/clients/update/{{ $client->id }}" method="POST">
            @csrf
            @method('PUT') 
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" value="{{ $client->name }}" required>
            </div>
            <div class="form-group">
                <label for="birthday">Data de Nascimento:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Digite a data de aniversário" value="{{ date('Y-m-d', strtotime($client->birthday)) }}" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control cpf" id="cpf" name="cpf" maxlength="14" autocomplete="off" placeholder="Digite o CPF" value="{{ $client->cpf }}" required>
            </div>
            <div class="form-group">
                <label for="telephone">Celular:</label>
                <input type="text" class="form-control phone_with_ddd" id="telephone" name="telephone" maxlength="14" placeholder="Digite o celular" value="{{ $client->telephone }}" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email" value="{{ $client->email }}" required>
            </div>
            <div class="form-group">
                <label for="adress">Endereço:</label>
                <input type="text" class="form-control" id="adress" name="adress" placeholder="Digite o endereço" value="{{ $client->adress }}" required>
            </div>
            <div class="form-group">
                <label for="numberhouse">Número:</label>
                <input type="text" class="form-control" id="numberhouse" name="numberhouse" placeholder="Digite o número da casa" value="{{ $client->numberhouse }}" required>
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Digite a cidade" value="{{ $client->city }}" required>
            </div>
            <div class="form-group">
                <label for="observation">Observação:</label>
                <textarea name="observation" id="observation" class="form-control" maxlength="300"  placeholder="Observações">{{ $client->observation }}</textarea>
            </div>
            <input id="form-input" type="submit" class="btn btn-warning" value="Confirmar alterações">
        </form>
    </div>
@endsection