@extends('layouts.main')

@section('title', 'Encoraja')
@section('content')

<div>
    <form class="row g-3" action="/events" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="col-md-6">
            <label for="description" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="col-md-6">
            <label for="date" class="form-label">Data</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="col-md-6">
            <label for="time" class="form-label">Time</label>
            <input type="time" class="form-control" id="time" name="time">
        </div>
        <div class="col-md-4">
            <label for="modality" class="form-label">Modalidade</label>
            <select id="modality" name="modality" class="form-select">
                <option value="Presential">Presencial</option>
                <option value="Hybrid">Híbrido</option>
                <option value="Remote">Remoto</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="status" class="form-label">Status</label>
            <select id="status" name="status" class="form-select">
                <option value="Active">Ativo</option>
                <option value="Inactive">Inativo</option>
                <option value="Pending">Pendente</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="type" class="form-label">Tipo</label>
            <select id="type" name="type" class="form-select">
                <option value="Couse">Curso</option>
                <option value="Workshop">Oficina</option>
                <option value="Lecture">Palestra</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="target_audience" class="form-label">Público Alvo</label>
            <input type="text" class="form-control" id="target_audience" name="target_audience">
        </div>
        <div class="col-md-6">
            <label for="vacancies" class="form-label">Vagas</label>
            <input type="number" class="form-control" id="vacancies" name="vacancies">
        </div>
        <div class="col-md-6">
            <label for="social_vacancies" class="form-label">Vagas sociais</label>
            <input type="number" class="form-control" id="social_vacancies" name="social_vacancies">
        </div>
        <div class="col-md-6">
            <label for="regular_vacancies" class="form-label">Vagas normais</label>
            <input type="number" class="form-control" id="regular_vacancies" name="regular_vacancies">
        </div>
        <div class="col-md-6">
            <label for="material" class="form-label">Materiais necessários</label>
            <input type="text" class="form-control" id="material" name="material">
        </div>
        <div class="col-md-6">
            <label for="interest_area" class="form-label">Área de interesse</label>
            <input type="text" class="form-control" id="interest_area" name="interest_area">
        </div>
        <div class="col-md-6">
            <label for="price" class="form-label">Preço (opcional)</label>
            <input type="number" step="any" class="form-control" id="price" name="price">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>

@endsection