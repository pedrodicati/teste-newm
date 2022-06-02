@extends('layouts.main')

@section('title', 'Menu')

@section('content')
    <div id="client-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastro do cliente</h1>
        <form action="/create" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" required>
            </div>
            <div class="form-group">
                <label for="birthday">Data de Nascimento:</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="Digite a data de aniversário" required>
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control cpf" id="cpf" name="cpf" maxlength="14" autocomplete="off" placeholder="Digite o CPF" required>
            </div>
            <div class="form-group">
                <label for="telephone">Celular:</label>
                <input type="text" class="form-control phone_with_ddd" id="telephone" name="telephone" maxlength="14" placeholder="Digite o celular" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Digite o email" required>
            </div>
            <div class="form-group">
                <label for="adress">Endereço:</label>
                <input type="text" class="form-control" id="adress" name="adress" placeholder="Digite o endereço" required>
            </div>
            <div class="form-group">
                <label for="numberhouse">Número:</label>
                <input type="text" class="form-control" id="numberhouse" name="numberhouse" placeholder="Digite o número da casa" required>
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Digite a cidade" required>
            </div>
            <div class="form-group">
                <label for="observation">Observação:</label>
                <textarea name="observation" id="observation" class="form-control" maxlength="300" placeholder="Observações"></textarea>
            </div>
            <input id="form-input" type="submit" class="btn btn-primary" value="Cadastrar Cliente">
        </form>
    </div>
@endsection