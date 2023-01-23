@extends('layouts.main')

@section('title', 'Criar Clientes')

@section('content')

<h2>Cadastrar Cliente</h2>

<form action="/clients" method="POST" class="formularioCliente">
  @csrf
  <div>
    <div class="mb-3">
      <label for="cnpj" class="form-label">CNPJ</label>
      <input type="text" class="form-control" id="cnpj" name="cnpj">
    </div>
    <div class="mb-3">
      <label for="razao_social" class="form-label">Razão Social</label>
      <input type="text" class="form-control" name="razao_social" id="razao_social">
    </div>
    <div class="mb-3">
      <label for="ie" class="form-label">IE</label>
      <input type="text" class="form-control" name="ie" id="ie">
    </div>
    <div class="mb-3">
      <label for="cep" class="form-label">CEP</label>
      <input type="text" class="form-control" name="cep" id="cep" onblur="pesquisacep(this.value);">
    </div>
    <div class="mb-3">
      <label for="logradouro" class="form-label">Logradouro</label>
      <input type="text" class="form-control" name="logradouro" id="logradouro">
    </div>
  </div>
  <div>
    <div class="mb-3">
      <label for="numero" class="form-label">Numero</label>
      <input type="text" class="form-control" name="numero" id="numero">
    </div>
    <div class="mb-3">
      <label for="bairro" class="form-label">Bairro</label>
      <input type="text" class="form-control" name="bairro" id="bairro">
    </div>
    <div class="mb-3">
      <label for="cidade" class="form-label">Cidade</label>
      <input type="text" class="form-control" name="cidade" id="cidade">
    </div>
    <div class="mb-3">
      <label for="uf" class="form-label">UF</label>
      <input type="text" class="form-control" name="uf" id="uf">
    </div>
    <div class="mb-3">
      <label for="pais" class="form-label">País</label>
      <input type="text" class="form-control" name="pais" id="pais">
    </div>
    <input type="submit" value="cadastrar" class="btn btn-success">
  </div>
</form>

<script src="/js/script.js"></script>

@endsection