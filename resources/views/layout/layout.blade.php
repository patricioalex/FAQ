<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <title>Patricio Alex - Portfólio</title>
        <link rel="shortcut icon" href="{{ asset('storage/imagens/PA.png') }}">

        {{--  Script  --}}
        {{--  Nõ pode declarar dois javascrip, jquery e ajax pois dá conflitos. Ás vezes ele é carregado no final da pagina também  --}}
        {{-- <script src="{{ asset('js/app.js') }}" ></script> --}}
        {{-- <script src="{{ asset('js/eventos.js') }}"></script> --}}
        {{--  <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/pure-min.css" integrity="sha384-cg6SkqEOCV1NbJoCu11+bm0NvBRc8IYLRGXkmNrqUBfTjmMYwNKPWBTIKyw9mHNJ" crossorigin="anonymous">  --}}

        
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" text="text/css" href="{{ asset('css/estilo.css') }}">

    </head>
    <body>
        <div id="app">
            <header >
                <div class="header-menu" id="header-fixed">
                    {{--  Menu navbar fixo  --}}
                    <nav class="navbar " id="navbar">
                        <button class="navbar-toggler" type="button" id="buttonControlMenu">
                            <i class="fas fa-bars menu-icone"></i>
                        </button> 
                        @auth
                            <div>
                                <a  class="text-decoration-none text-white" href="{{ route('dashboard')}}">Dashboard</a>
                            </div>                             
                        @endauth                    
                            
                        {{--  Menu sidebar e opções --}}
                        <div id="menuSideNav" class="sidenav p-0">
                            {{--  <!-- botão de soluções para baixar -->  --}}
                            <center class="perfil">
                                <img src="{{ asset('storage/imagens/home/perfil.png') }}" alt="Patrício Alex">
                                <p class="text-white">Patrício Alex</p>
                            </center>
                            <a href="{{ url('/')}}" class="menu-options">Início</a>
                            {{-- <a href="#" class="menu-options" data-toggle="collapse" data-target="#collapseNavbar" id="icon-rotate">
                                Soluções <i class="fas fa-angle-down icone-down" id="novo"></i>
                            </a> --}}
                            {{--  Opções links  --}}
                            <div class="collapse navbar-collapse" id="collapseNavbar">
                                <ul>
                                    <li >
                                        <a class="menu-options" href="#">App 1</a>
                                    </li>
                                    <li >
                                        <a class="menu-options" href="#">App 1</a>
                                    </li>
                                    <li >
                                        <a class="menu-options" href="#">App 1</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="{{ url('projetos')}}" class="menu-options">Projetos</a>
                            <a href="{{ url('portfolio')}}" class="menu-options">Portfólio</a>
                            {{-- <a href="{{ url('sobre')}}" class="menu-options">FAQ</a> --}}
                            <a href="{{ url('sobre')}}" class="menu-options">Sobre o Autor</a>
                            @guest
                                <a href="{{ url('area-restrita')}}" class="menu-options">Área Restrita</a>
                            @endguest

                            {{--  Redes sociais --}}
                            <div class="footer">
                                <footer class="page-footer mt-5 text-white">
                                    <p class="text-center">Redes Sociais</p>
                                    {{--  <!-- Copyright redes sociais -->  --}}
                                    <div class="text-center display-none pb-2 social-menu">
                                        <!-- Facebook -->
                                        {{--  <a class="fb-ic" href="#">
                                            <i class="fab fa-facebook-f fa-md text-white "> </i>
                                        </a>  --}}
                                        {{--  <!-- Twitter -->
                                        <a class="tw-ic" href="#">
                                            <i class="fab fa-twitter fa-sm text-white"> </i>
                                        </a>  --}}
                                        <!-- Google +-->
                                        <a class="gplus-ic m-2" href="mailto:patricioalex96@gmail.com">
                                            <i class="fab fa-google-plus-g fa-lg text-white"> </i>
                                        </a>
                                        <!--Linkedin -->
                                        <a class="li-ic m-2" target="_blank" href="https://www.linkedin.com/in/patr%C3%ADcio-alex-219279118/">
                                            <i class="fab fa-linkedin-in fa-lg text-white"> </i>
                                        </a>
                                        <a class="li-ic m-2" target="_blank" href="https://github.com/patricioalex96">
                                            <i class="fab fa-github fa-lg text-white"></i>
                                        </a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            {{-- <!--Body main--> --}}
            <main class="main">
                {{--  Templete carousel  --}}
                @yield('carousel')
                {{--  <iframe width="560" height="315" src="https://www.youtube.com/embed/qSbbPxkx3OQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe  --}}
                @yield('content')
            </main>
            <!---->
            <footer class="page-footer font-small bg-dark pt-4" style="font-size: 10pt;">
                <div class="container-fluid text-center text-md-left">
                    <!-- Footer Elements -->
                    <div class="row m-0">
                        <div class="col-md-6 mt-md-0 mt-3 text-white">
                            <h5 class="text-uppercase ">Conhecimentos e ferramentas de Estudos.</h5>
                            <p>Essas são as linguagens, frameworks, bibliotecas e Banco de Dados que tenho conhecimento e que estou estudando no momento.
                            <p>
                            <div class="solution-text pt-5" style="font-size: 25pt; ">
                                <i class="fas fa-microchip">Solutions application</i>
                            </div>
                        </div>
                        <!-- Grid column -->
                        <div class="col-md-2 mb-md-0 mb-3 text-white">
                            <h5 class="tex-uppercase">Linguagens</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a class=" text-decoration-none text-white" href="https://www.php.net/manual/pt_BR/intro-whatis.php" target="_blank" alt="PHP" title="PHP">PHP</a>
                                </li>
                                <li>
                                    <a class=" text-decoration-none text-white" href="https://www.ecma-international.org/publications/standards/Ecma-262.htm" target="_blank" alt="JavaScript" title="JavaScript">JavaScript</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Grid column framework e bibliotecas-->
                        <div class="col-md-2 mb-md-0 mb-3 text-white">
                            <h5 class="tex-uppercase">Frameworks e Bibliotecas</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-decoration-none text-white" href="https://laravel.com/" target="_blank" alt="Laravel PHP" title="Laravel PHP">
                                        Laravel <i class="fab fa-laravel fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none text-white" href="https://vuejs.org/" target="_blank" alt="Vue.js" title="Vue.js">
                                        Vue.js <i class="fab fa-vuejs fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none text-white" href="https://expressjs.com/pt-br/" target="_blank" alt="Express JS" title="Express JS">
                                        Express <i class="fab fa-node-js fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none text-white" href="https://nodejs.org/en/" target="_blank" alt="Node.js" title="Node.js">
                                        Node.js <i class="fab fa-node-js fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none text-white" href="https://getbootstrap.com/" target="_blank" alt="Bootstrap" title="Bootstrap">
                                        Bootstrap <i class="fab fa-bootstrap fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class=" text-decoration-none text-white" href="https://getcomposer.org/" target="_blank" alt="Composer PHP" title="Composer PHP">
                                        Composer <i class="fab fa-php fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none text-white" href="https://www.npmjs.com/" target="_blank" alt="Npm.js" title="Npm.js">
                                        Npm.js <i class="fab fa-npm fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none text-white" href="https://jwt.io/" target="_blank" alt="JWT" title="JWT">
                                        JWT <i class="fas fa-lock fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Grid column Banco de Dados-->
                        <div class="col-md-2 mb-md-0 mb-3 text-white">
                            <h5 class="tex-uppercase">Banco de Dados</h5>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-decoration-none text-white" href="https://www.postgresql.org/" target="_blank" alt="Postgres" title="Postgres">
                                        Postgres <i class="fas fa-database fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none text-white" href="https://www.mysql.com/" target="_blank" alt="MySQL" title="MySQL">
                                        MySQL <i class="fas fa-database fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-decoration-none text-white" href="https://www.mongodb.com/" target="_blank" alt="MongoDB" title="MongoDB">
                                        MongoDB <i class="fas fa-database fa-lg text-white mr-md-5 mr-3 fa-1x"></i>
                                    </a>
                                </li>            
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Copyright -->
                <div class="footer-copyright text-center text-white pt-0 pb-2" style="font-size: 10pt;">© 2020 Copyright:
                    <a href="https://patricio.com.br" class="text-white text-decoration-none"> Patrício Alex</a>
                </div>
            </footer>
        </div>
            <div class='fechar'></div>
            <script src="{{ asset('js/app.js') }}" ></script>
            <script src="{{ asset('js/eventos.js') }}"></script>
    </body>
</html>
