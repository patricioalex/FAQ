@extends('layouts.layout')

@section('content')
    {{-- {{session_status() != PHP_SESSION_ACTIVE}} --}}
    <div class="card m-2">
        <div class="card-header badge-secondary" id="headerCadastro">
            <i class="fas fa-edit"></i> Cadastro
        </div>
        {{--  //componet da pasta Cadastrar  --}}
        <pagina-cadastro></pagina-cadastro>
    </div>
@endsection
