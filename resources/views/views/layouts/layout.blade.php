<!DOCTYPE append>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--csrf_token O laravael solicita Token para validar aquela requisição-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>FAQ Help Desk</title>
    <link rel="shorcut icon" href="{{ asset('storage/lupa.png') }}">

    <!-- Scripts -->
    {{--  <script src="{{ asset('js/app.js') }}"></script>  --}}
    {{--  <script src="{{ asset('js/pesquisa.js') }}"></script>  --}}

    <!-- Icons -->
     {{--  <script src="{{ asset('css/app.css') }}" crossorigin="anonymous"></script>  --}}

    <!-- BootStrap -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
    <body>

        <header class="header-fixed">
            {{--  <!--Nav fixa com o nome FAQ-HELPDESK-->  --}}
            <nav class="navbar navbar-expand-sm badge-success">
                <a class="navbar-brand" id="brand-faq" href="/"><b>FA</b><i class="fas fa-search" id="icon-faq"></i></i></a>
                <button class="navbar-toggler" id="button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars text-white" ></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item shadow-none " >
                            <a class="nav-link text-white" id="menu-link" href="{{ route('home') }}"><i class="fas fa-home"></i> Inicio</a>
                        </li>
                        <li class="nav-item shadow-none" >
                            <a class="nav-link text-white" id="menu-link" href="{{ route('categorias') }}"><i class="fas fa-history"></i> Categorias de Dúvidas</a>
                        </li>
                        <li class="nav-item shadow-none" >
                            <a class="nav-link text-white" id="menu-link"  href="{{ route('codigos_de_erros') }}"><i class="fas fa-exclamation-triangle"></i> Códigos de Erros</a>
                        </li>
                        <li class="nav-item shadow-none" >
                            <a class="nav-link text-white" id="menu-link"  href="{{ route('cadastro') }}"><i class="fas fa-edit"></i> Cadastro</a>
                        </li>
                        {{--  <li class="nav-item text-left shadow-none" id="menuPesquisar">
                            <a class="nav-link text-white" id="menuConfiguracao" href="{{ url('/configuracao') }}">Configuração</a>
                        </li>  --}}
                    </ul>
                    <!-- link de autenticação para rota cadastro -->
                        {{--  @guest  --}}
                            {{--  <a class="nav-link text-white p-0" id="menu-link" href="{{ route('login') }}">Entrar</a>  --}}
                                {{--  @if (Route::has('register'))
                                    <a class="nav-link text-white" id="menu-link" href="{{ route('register') }}">Cadastrar</a>
                                @endif
                        @else
                            <a class="nav-link text-white p-0" id="menu-link" href="#">
                                {{ Auth::user()->name }}
                            </a>
                            <a class="nav-link text-white" id="menu-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sair
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        @endguest  --}}

                            {{--  <a>{{ session('data')['email']}}</a>  --}}
                             @if(session('data'))
                                <a class="nav-link text-white p-0" id="menu-link" href="#">
                                     {{ session('data')['user'] }}
                                </a>
                                <a class="nav-link text-white" id="menu-link" href="#" onclick="document.getElementById('logout-form').submit();">
                                    Sair
                                </a>
                                <form id="logout-form" action="{{ route('sair') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                             @endif
                    <div class="text-left">
                        <a class="navbar-brand " id="brand-van" href="https://www.vanpix.com.br/" ><b>Van</b>pix</a>
                    </div>
                </div>

            </nav>
        </header>



        {{--  Contéudos da pesquisa  --}}
        <main id="app">
            @yield('content')
        </main>

        <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>


