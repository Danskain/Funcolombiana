@extends('layouts.app', ['class' => 'bg-default'])
<style>
    
    body {
        overflow-x: hidden;
        overflow-y: hidden; 
}
    
</style>
@section('content')
    <div class="row d-flex justify-content-center h-100 fondo">
        <div class="col-lg-8 ">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 ">
                    <div class="card bg-secondary shadow border-0 ">
                        <div class="card-body float">
                        <div class="text-muted text-center mt2 pb-2">
                                <h1>Bienvenido a</h1>
                            </div>
                            <div class="text-center mt-3 pb-2">
                                <img class="img-circle img-thumbnail" src="{{ asset('assets/img/brand/favicon.jpg') }}" width="70%"  alt="">
                            </div>
                            <div class="text-center text-muted mt-3 pb-3">
                                <small>
                                        Por favor ingrese sus credenciales
                                </small>
                            </div>
                            <form role="form" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }} mb-3">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}" type="email" name="email" value="{{ old('email') }}" value="admin@argon.com" required autofocus>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                                    <div class="input-group input-group-alternative">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                                        </div>
                                        <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="{{ __('Password') }}" type="password" value="secret" required>
                                    </div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" style="display: block;" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="custom-control custom-control-alternative custom-checkbox">
                                    <input class="custom-control-input" name="remember" id="customCheckLogin" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="customCheckLogin">
                                        <span class="text-muted">{{ __('Recordar Credenciales') }}</span>
                                    </label>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary my-4">{{ __('Ingresar') }}</button>
                                </div>
                            </form>
                            <div class="row mt-3">
                                <div class="col-6">
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            <small>{{ __('??Olvid?? su contrase??a?') }}</small>
                                        </a>
                                    @endif
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{ route('register') }}" >
                                        <small>{{ __('Crear nueva cuenta') }}</small>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
