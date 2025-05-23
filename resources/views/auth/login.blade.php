@extends('layouts.menu1')

@section('content')
<div class="container">
    <div class="row justify-content-center m-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary-subtle">Inicar Sesion</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar mi usuario') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0 text-center">
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('register'))
                                <button type="submit" class="btn btn-primary">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                                </button>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-0">
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Restablecer contraseña?') }}
                            </a>
                            @endif
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container text-center">
            <p>&copy; 2025 SmartTechSolutions. Todos los derechos reservados.</p>
        </div>
    </footer>
</div>
</div>
@endsection
