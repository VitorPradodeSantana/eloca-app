@extends('layouts.main')

@section('title', 'Editando: ' . $client->razao_social)

@section('content')

<div class="mt-5 edit">
  <h1>Editando: {{ $client->razao_social }}</h1>
  <form action="/clients/update/{{ $client->id }}" method="POST" class="formularioCliente">
    @csrf
    @method('PUT')
    <div>
      <div class="mb-3">
        <label for="cnpj" class="form-label">CNPJ</label>
        <input type="text" class="form-control" id="cnpj" name="cnpj" value="{{ $client->cnpj }}">
      </div>
      <div class="mb-3">
        <label for="razao_social" class="form-label">Razão Social</label>
        <input type="text" class="form-control" name="razao_social" id="razao_social" value="{{ $client->razao_social }}">
      </div>
      <div class="mb-3">
        <label for="cep" class="form-label">CEP</label>
        <input type="text" class="form-control" name="cep" id="cep" onblur="pesquisacep(this.value);" value="{{ $client->cep }}">
      </div>
      <div class="mb-3">
        <label for="logradouro" class="form-label">Logradouro</label>
        <input type="text" class="form-control" name="logradouro" id="logradouro" value="{{ $client->logradouro }}">
      </div>
      <div class="mb-3">
        <label for="numero" class="form-label">Numero</label>
        <input type="text" class="form-control" name="numero" id="numero" value="{{ $client->numero }}">
      </div>
    </div>
    <div>
      <div class="mb-3">
        <label for="bairro" class="form-label">Bairro</label>
        <input type="text" class="form-control" name="bairro" id="bairro" value="{{ $client->bairro }}">
      </div>
      <div class="mb-3">
        <label for="cidade" class="form-label">Cidade</label>
        <input type="text" class="form-control" name="cidade" id="cidade" value="{{ $client->cidade }}">
      </div>
      <div class="mb-3">
        <label for="uf" class="form-label">UF</label>
        <input type="text" class="form-control" name="uf" id="uf" value="{{ $client->uf }}">
      </div>
      <div class="mb-3">
        <label for="pais" class="form-label">País</label>
        <input type="text" class="form-control" name="pais" id="pais" value="{{ $client->pais }}">
      </div>
      <input type="submit" value="Salvar" class="btn btn-success" />
    </div>
  </form>
</div>

<script src="/js/script.js"></script>

@endsection