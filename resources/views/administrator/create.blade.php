@extends('layouts.main')

@section('title', 'Encoraja')
@section('content')

<div>
    <form class="row g-3" action="/adm" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-6">
            <label for="date_birthday" class="form-label">Data de nascimento</label>
            <input type="date" class="form-control" id="date_birthday" name="date_birthday">
        </div>
        <div class="col-md-6">
            <label for="cpf" class="form-label">CPF</label>
            <input type="cpf" class="form-control" id="cpf" name="cpf">
        </div>
        
        <div class="col-md-6">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div>
            <input type="checkbox" id="image_term" name="image_term" value="1">
            <label for="image_term">Aceito termo de imagem</label>
        </div>
        <div>
            <input type="checkbox" id="data_term" name="data_term" value="1">
            <label for="data_term">Aceito termo de dados</label>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
@endsection