@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login.validar') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="usuario" class="col-md-4 col-form-label text-md-right">Usuário</label>

                            <div class="col-md-6">
                                <input id="usuario" type="text" class="form-control @error('usuario') is-invalid @enderror" name="usuario" value="{{ old('usuario') }}" placeholder="Login ou email..." required autocomplete="usuario" autofocus>
                                {{-- @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>
                            <div class="col-md-6">
                                <input id="senha" type="password" class="form-control @error('senha') is-invalid @enderror" name="senha" required autocomplete="current-password">
                            </div>
                        </div>
                        <div class="form-group row mt-2 mb-2">
                            <div class="col-md-6 offset-md-4 text-center">
                                @foreach ($errors->all() as $item)
                                    <font color="red">{{ $item}}</font>
                                @endforeach
                            </div>
                        </div>

                        {{--  <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        Mantenha-me conectado
                                    </label>
                                </div>
                            </div>
                        </div>  --}}

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success " style="width:330px;" >
                                    Entrar
                                </button>
                                {{--  <a class="btn btn-link" href="#">
                                    Esqueceu sua senha?
                                </a>  --}}

                                {{--  @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        Esqueceu sua senha?
                                    </a>
                                @endif  --}}

                            </div>
                        </div>
                        <div class="form-group row pt-2 " >
                            <div class="col-md-8 offset-md-4">
                                <a class="btn btn-link" href="https://www.vanpix.com.br">
                                    Esqueceu sua senha?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{--  <p class="alert alert-info">teste</p>  --}}

@endsection
