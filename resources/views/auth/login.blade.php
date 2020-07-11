@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card-group">
            <div class="card p-4">
                <div class="card-body">
                    @if(\Session::has('message'))
                        <p class="alert alert-info">
                            {{ \Session::get('message') }}
                        </p>
                    @endif
                    
                    
                    {{-- <a class="navbar-brand" href="#"><img src={{asset('img/logo.png')}} alt="logo"></a> --}}

                    <form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
                        <h1>Orzoqni Al Hayat</h1>
                        <p class="text-muted">{{ trans('global.login') }}</p>
                        <div style="width: 100%;text-align: right;">
                            <img src="{{asset('img/loginLogo.png')}}" />
                        </div>
                        <br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input name="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">
                            @if($errors->has('email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('email') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                            </div>
                            <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-4">
                            <div class="form-check checkbox">
                                <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                    {{ trans('global.remember_me') }}
                                </label>
                            </div>
                        </div>

                        <div style="display: inline" class="col-md-6 float-right">
                            <button type="submit" class="btn btn-danger px-4">
                                {{ trans('global.login') }}
                            </button>
                            <button class="btn btn-dark px-4">
                                <a class="text-white" href="{{route('register')}}">Register</a>
                            </button>
                        </div>
                    </form>
                    
                    <div class="col-md-6 text-left">
                        <a class="btn btn-link text-success px-0" href="{{ route('password.request') }}">
                            {{ trans('global.forgot_password') }}
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection