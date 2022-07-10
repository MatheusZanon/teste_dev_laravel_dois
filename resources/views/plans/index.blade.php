@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h4 class="card-title">Planos</h4>
        </div>
        <div class="col-lg-1">
            <a href="{{route('homepage.index')}}" class="btn btn-info homeButton"><i class="fa-solid fa-house"></i></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="card-subtitle mb-5">Gerenciamento de Planos</h4>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped color-table inverse-table text-center">
            <thead>
                <tr>
                    <th>Registro</th>
                    <th>Nome</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plans as $plan)
                <tr>
                    <td>{{$plan->registro}}</td>
                    <td>{{$plan->nome}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
