@extends('layouts.layout')


@section('content')
    {{--  //Componet está na pasta Home  --}}
    <pesquisar></pesquisar>

    <div class="card" id="card-central-pergunta-recente" >
            <div class="card-header" id="headerCards" style="background-color: #6f42c1; color: white;">
                <i class="fas fa-history"  > </i> Perguntas Recentes
            </div>
        <div class="card-body" id="card-body-perguntas-recentes">
            <div id="accordion">
                @foreach ($categoria as $key => $value)
                    <div class="card m-1">
                            <button class="btn shadow-none" id="card-button" data-toggle="collapse" data-target="#{{$value->sistema . $value->id . $value->sistema}}" aria-expanded="false" aria-controls="{{$value->sistema . $value->id . $value->sistema}}">
                                {{ $value->pergunta}}
                            </button>
                        <div id="{{$value->sistema . $value->id . $value->sistema}}" class="collapse" aria-labelledby="{{$value->sistema . $value->id}}" data-parent="#accordion">
                            <div class="card-body" id="card-body-respostas">
                                <pre id="card-body-respostas">{{$value->resposta}}</pre>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection



