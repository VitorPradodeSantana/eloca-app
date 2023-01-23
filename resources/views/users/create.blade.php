@extends('layouts.main')

@section('title', 'Criar usuário')

@section('content')

<div class="boxCriarUsuario">

  <h2>Cadastro de usuário</h2>

  <form action="/users" method="POST" class="criarUsuario">
    @csrf
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username">
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="text" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
      <label for="senha" class="form-label">Senha</label>
      <input type="password" class="form-control" id="password" name="password">
    </div>

    <input type="submit" class="btn btn-success" value="cadastrar" />
  </form>

</div>
@endsection