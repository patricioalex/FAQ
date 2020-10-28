<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>FAQ</title>      
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        {{-- <link rel="stylesheet" text="text/css" href="{{ asset('css/estilo.css') }}"> --}}

    </head>
    <body>
        <div id="app">

            <!--Body main-->
            <main class="main">
                
            </main>

        </div>
            <div class='fechar'></div>
            <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>