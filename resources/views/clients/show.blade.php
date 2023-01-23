@extends('layouts.main')

@section('title', 'Detalhes')

@section('content')

<div class="container">
  <div class="row d-flex align-items-start mt-5 show">
    <div class="col">
      <div style="width: 240px; margin: 0 auto;">
        <img src="/img/pessoa.png" class="card-img-top" alt="..." width="80" height="240">
      </div>
    </div>
    <div class="col d-flex justify-content-around">
      <div>
        <h4>CNPJ</h4>
        <p>{{ $client->cnpj }}</p>
        <h4>Razão Social</h4>
        <p>{{ $client->razao_social }}</p>
        <h4>IE</h4>
        <p>{{ $client->ie }}</p>
        <h4>CEP</h4>
        <p>{{ $client->cep }}</p>
        <h4>Logradouro</h4>
        <p>{{ $client->logradouro }}</p>
      </div>
      <div>
        <h4>Numero</h4>
        <p>{{ $client->numero }}</p>
        <h4>Bairro</h4>
        <p>{{ $client->bairro }}</p>
        <h4>Cidade</h4>
        <p>{{ $client->cidade }}</p>
        <h4>UF</h4>
        <p>{{ $client->uf }}</p>
        <h4>País</h4>
        <p>{{ $client->pais }}</p>
      </div>
    </div>

    <a href="/home" class="btn btn-link mt-5">Veja todos os clientes</a>

  </div>
</div>

@endsection