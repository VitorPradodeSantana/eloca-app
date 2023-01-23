@extends('layouts.main')

@section('title', 'Home')

@section('content')

<div class="pesquisa">
  <form class="d-flex" id="form-pesquisa" role="search" method="GET" action="/home">
    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</div>

<div>

  @if($search)
  <h2>Buscando por: {{ $search }}</h2>
  @else
  <h2 class="titulo">Clientes</h2>
  @endif
</div>

<div class="cards">

  @foreach($clients as $client)
  <div class="card" style="width: 18rem;">
    <div class="img">
      <img src="img/pessoa.png" class="card-img-top" alt="...">
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $client->razao_social }}</h5>
      <p class="card-text">{{ $client->cnpj }}</p>
      <div class="btns">
        <a href="/clients/{{ $client->id }}" class="btn btn-primary">Detalhes</a>
        <a href="/clients/edit/{{ $client->id }}" class="btn btn-warning">Editar</a>
        <form action="/clients/{{ $client->id }}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
  @endforeach

  <div class="filtro">
    @if(count($clients) == 0 && $search)
    <p>Não foi possível encontrar nenhum cliente com: {{ $search }} ! <a href="/home">Ver Todos</a> </p>
    @elseif(count($clients) == 0)
    <p>Não há clientes cadastrados</p>
    @endif
  </div>

</div>

@endsection