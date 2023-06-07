@extends('layouts.dashboard')

@section('content')

<h5 class="card-title fw-semibold mb-4">Dentista</h5>
<div class="card">
    <div class="card-body">
        <form action="/dentist/salvar_novo">
            <div class="mb-3">
                <label for="nameDentist" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nameDentist" aria-describedby="emailHelp">
                <div id="nameHelp" class="form-text">Nome do novo dentista.</div>
            </div>
            <div class="mb-3">
                <label for="telefoneDentist" class="form-label">Telefone</label>
                <input type="text" class="form-control" id="telefoneDentist">
            </div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>
</div>
</div>


@endsection
