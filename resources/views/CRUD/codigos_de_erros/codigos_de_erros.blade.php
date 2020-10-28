@extends('layouts.layout')


@section('content')

<div class="card m-3">
    {{--  Card header Pesquisar  --}}
    <div class="card-header badge-secondary p-2">
        <div class="col-10 text-white" style="font-size: 15pt">
            <i class="fas fa-search"></i>  Pesquisar por:
        </div>
    </div>
    {{--  //Componet está na pasta PesquisarErros  --}}
        <pesquisar-erros></pesquisar-erros>
</div>

@endsection




