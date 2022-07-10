@extends('layout')

@section('content')

<h4 class="card-title">Home</h4><hr>
<div class="row">
    <div class="col-md-8">
        <h4 class="card-subtitle mb-5">Aqui é o começo da aplicação</h4>
    </div>

    <div class="col-md-4">
        <div class="botaoConsultas">
            <a href="plans/home" class="btn btn-warning"><i class="fa-solid fa-magnifying-glass"></i> Planos</a>
            <a href="beneficiarios/home" class="btn btn-warning"><i class="fa-solid fa-magnifying-glass"></i> Beneficiários</a>
        </div>

    </div>

</div>

@endsection
