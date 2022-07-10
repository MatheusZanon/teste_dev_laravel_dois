@extends('layout')

@section('content')
    <div class="row">
        <div class="col-lg-11">
            <h4 class="card-title">{{$planInfo->nome}}</h4>
        </div>
        <div class="col-lg-1">
            <a href="{{url('plans/home')}}" class="btn btn-primary" style="color: white"><i class="fa-solid fa-arrow-left-long"></i></a>
            <a href="{{route('homepage.index')}}" class="btn btn-info" style="color: white"><i class="fa-solid fa-house"></i></a>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h4 class="card-subtitle mb-5">Informações sobre os Planos</h4>
        </div>
    </div>



@endsection()
