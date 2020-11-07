<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>FAQ</title>      
        <link rel="shortcut icon"  href="{{ asset('storage/imagens/lupa.png') }}">
        <link rel="stylesheet" text="text/css" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        <div id="app">
            <header>
                {{--  <!--Navbar fixa-->  --}}
                <nav class="navbar navbar-expand-md navbar-dark bg-danger">
                    <a class="navbar-brand text-white " href="/"><b>FA</b><i class="fas fa-search " ></i></i></a>
                    <button class="navbar-toggler border-white" type="button" data-toggle="collapse" data-target="#navbarFAQ" aria-controls="navbarFAQ" aria-expanded="false" aria-label="Toggle navigation">
                        <div style="font-size: 0.5rem;">
                            <i class="fas fa-bars fa-4x"></i>
                        </div>
                    </button>   
                    {{-- opções do menu  --}}
                    <div class="collapse navbar-collapse" id="navbarFAQ">
                        <ul class="navbar-nav">
                            <li class="nav-item p-1" >
                                <a class="btn btn-outline-light shadow-none border-0" href=""><i class="fas fa-home"></i> Inicio</a>
                            </li>
                            <li class="nav-item p-1" >
                                <a class="btn btn-outline-light shadow-none border-0" href=""><i class="fas fa-history"></i> Categorias de Dúvidas</a>
                            </li>
                            <li class="nav-item p-1" >
                                <a class="btn btn-outline-light shadow-none border-0" href=""><i class="fas fa-exclamation-triangle"></i> Códigos de Erros</a>
                            </li>
                        </ul>
                        
                        {{-- Verifica se o usuário está autenticato, caso não, o nome dele não aparece e terá que logar --}}
                        <div class="ml-md-auto p-1">
                            @auth
                                <p class="text-white text-decoration-none">{{ Auth::user() }}</p>
                            @endauth

                             @guest
                                 <a class="btn btn-outline-light text-decoration-none shadow-none border-0" href="#" >Acesso <i class="fas fa-sign-in-alt"></i></a>
                             @endguest
                        </div>                              
                    </div>    
                </nav>
            </header>   

            <!--Body main-->
            <main>
                @yield('content')
            </main>

        </div>
            <script src="{{ asset('js/app.js') }}" ></script>
    </body>
</html>