@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h4 class="card-title">Beneficiários</h4>
        </div>
        <div class="col-lg-1">
            <a href="{{route('homepage.index')}}" class="btn btn-info homeButton"><i class="fa-solid fa-house"></i></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="card-subtitle mb-5">Informações sobre os Beneficiários</h4>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-striped color-table inverse-table text-center">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade (anos)</th>
                    <th>Titular</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beneficiarios as $beneficiario)
                <tr>
                    <td>{{$beneficiario->nome}}</td>
                    <td>{{$beneficiario->idade}}</td>
                    @if ($beneficiario->titular == 1)
                        <td>SIM</td>
                    @endif
                    @if ($beneficiario->titular == 0)
                        <td>--</td>
                    @endif
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection()
