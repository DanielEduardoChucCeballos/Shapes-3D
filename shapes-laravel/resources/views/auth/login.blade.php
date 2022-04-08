@extends('layouts.loginStyle')

@section('content')
<div>
    <div class="row justify-content-end">
        <div class="col-md-10" id="delay1">
            <div class="row">
                <div class="col-md-1">
                    <a class="btn btn-outline-primary btn-sm" href="{{route('index')}}"><i class="fa fa-arrow-left"></i></a>
                </div>
                <div class="col-md-11">
                    <h2>{{ __('Inicia tu sesión') }}</h2>
                </div>
            </div>
            <div class="card shadow">
                <div class="card-header bg-primary"></div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <br>
                        <label for="email">{{ __('Tu correo') }}</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ejemplo@algo.com">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Este usuario no esta en nuestros registros</strong>
                                    </span>
                                @enderror
                        <br><hr><br>
                        <label for="email">{{__('Tu contraseña')}}</label>
                        <input input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="8 o más caracteres">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        <br><br>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('Mantener sisión abierta') }}</label>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    {{ __('Ingresar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Has olvidado tu contraseña?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        
                            

                            <!--div class="col-md-6">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Tu correo') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ejemplo@algo.com">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Tu contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="8 o más caracteres">

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
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div-->
                    </form>
                </div>
            </div>
            <br>
            <a class="btn-sm" href="{{ route('register') }}">¿No tienes una cuenta? Registrate <span>Aquí</span></a>
            
        </div>
    </div>
</div>
@endsection
