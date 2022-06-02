@extends('layouts.main')

@section('title', 'Clientes')

@section('content')

    <div id="client-container" class="col-md-12">
        <h2>Clientes cadastrados</h2>
        <div id="cards-container" class="row">
            @foreach($client as $clients)
                <div class="card col-md-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $clients->name }}</h5>
                        <p class="card-birthday"><strong>Data de nascimento:</strong> {{ date('d/m/Y', strtotime($clients->birthday)) }}</p>
                        <p class="card-cpf"><strong>CPF:</strong> {{ $clients->cpf }}</p>
                        <p class="card-phone"><strong>Celular:</strong> {{ $clients->telephone }}</p>
                        <p class="card-email"><strong>E-mail:</strong> {{ $clients->email }}</p>
                        <p class="card-adress"><strong>Endereço:</strong> {{ $clients->adress }}</p>
                        <p class="card-numberhouse"><strong>Número:</strong> {{ $clients->numberhouse }}</p>
                        <p class="card-city"><strong>Cidade:</strong> {{ $clients->city }}</p>
                        <p class="card-observation"><strong>Observação:</strong> {{ $clients->observation }}</p>
                    </div>
                    <div class="card-button">
                        <a href="clients/edit/{{ $clients->id }}">
                            <button type="button" class="btn btn-info edit-btn">Editar</button>
                        </a>
                        <form action="clients/{{ $clients->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">Excluir</button>
                        </form>
                    </div>
                </div>
            @endforeach
            {{ $client->links() }}
        </div> 
    </div>
    
@endsection