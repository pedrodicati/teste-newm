@extends('layouts.main')

@section('title', 'Menu')

@section('content')
    <div id="client-create-container" class="col-md-6 offset-md-3">
        <h1>Cadastro do cliente</h1>
        <form action="/create" method="POST" name="formRegistration">
            @csrf
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Digite o nome" value="{{ old('name') }}" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="birthday">Data de Nascimento:</label>
                <input type="date" class="form-control @error('birthday') is-invalid @enderror" id="birthday" name="birthday" placeholder="Digite a data de aniversário" value="{{ old('birthday') }}" required>
                @error('birthday')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control cpf @error('cpf') is-invalid @enderror" id="cpf" name="cpf" maxlength="14" autocomplete="off" placeholder="Digite o CPF" value="{{ old('cpf') }}" required>
                @error('cpf')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="telephone">Celular:</label>
                <input type="text" class="form-control phone_with_ddd @error('telephone') is-invalid @enderror" id="telephone" name="telephone" maxlength="14" placeholder="Digite o celular" value="{{ old('telephone') }}" required>
                @error('telephone')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Digite o email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="adress">Endereço:</label>
                <input type="text" class="form-control @error('adress') is-invalid @enderror" id="adress" name="adress" placeholder="Digite o endereço" value="{{ old('adress') }}" required>
                @error('adress')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="numberhouse">Número:</label>
                <input type="text" class="form-control @error('numberhouse') is-invalid @enderror" id="numberhouse" name="numberhouse" placeholder="Digite o número da casa" value="{{ old('numberhouse') }}">
                @error('numberhouse')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" name="city" placeholder="Digite a cidade" value="{{ old('city') }}" required>
                @error('city')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="observation">Observação:</label>
                <textarea name="observation" id="observation" class="form-control @error('observation') is-invalid @enderror" maxlength="300" placeholder="Observações" value="{{ old('observation') }}"></textarea>
                @error('observation')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <input id="form-input" type="submit" class="btn btn-primary" value="Cadastrar Cliente">
        </form>
    </div>
@endsection