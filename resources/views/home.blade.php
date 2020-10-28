@extends('layout.app')

@section('content')
    {{ var_dump($categorias) }}
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <div class="card border-0 m-2">
                <h5 class="card-title p-3 badge-warning">Perguntas Recentes</h5>
            <div class="card-body"> 
            
            @foreach ($categorias as $item)
                <div class="accordion" id="perguntaResposta">
                    <div class="card m-2 border-0">
                        <div class="card-header p-0 border-0 mb-2" id="{{str_replace(' ', '', $item->sistema . $item->id )}}">
                            {{-- <h2 class="mb-0"> --}}
                                <button class="btn btn-block btn-outline-dark btn-lg border-0 text-left shadow-none" type="button" data-toggle="collapse" data-target="#{{str_replace(' ', '', $item->sistema . $item->id . $item->sistema)}}" aria-expanded="true" aria-controls="{{str_replace(' ', '', $item->sistema . $item->id . $item->sistema)}}">
                                    Lorem Ipsum Lorem Ipsum
                                </button>
                            {{-- </h2> --}}
                        </div>              
                        <div id="{{str_replace(' ', '', $item->sistema . $item->id . $item->sistema)}}" class="collapse " aria-labelledby="{{str_replace(' ', '', $item->sistema . $item->id)}}" data-parent="#perguntaResposta">
                            <div class="card-body border rounded text-md-left">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>   
            @endforeach
        </div>
    </div>
</div>
@endsection