@extends('layouts.layout')


@section('content')
    <div class="card m-3" id="card-categorias">
        <div class="card-header badge-secondary" id="headerCategoria" >
            <i class="fas fa-cogs"></i> Categoria de Dúvidas
        </div>
        {{--  //componet está dentro da pasta CategoriasErros  --}}
        <categorias_erros></categoria_erros>
    </div>
@endsection
