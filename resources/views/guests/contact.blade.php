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
                     
                    <form method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
                        <h1>Contact Us</h1>
                        <div style="width: 100%;text-align: right;">
                            <img src="{{asset('img/contactus.png')}}"/>
                        </div>
                        <br>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-user"></i>
                                </span>
                            </div>
                            <input name="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" required autofocus placeholder="Name" value="{{ old('name', null) }}">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-at"></i>
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
                                <span class="input-group-text">
                                    <i class="fa fa-phone"></i>
                                </span>
                            </div>
                            <input name="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" required autofocus placeholder="+212 XXXXXXXXX" value="{{ old('phone', null) }}">
                            @if($errors->has('phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('phone') }}
                                </div>
                            @endif
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                            </div>
                            <textarea class="form-control" name="body" id="body" type="text" placeholder="How Can We Help You ?">{{old('body',$post->body ?? null)}}</textarea>
                            {{-- <input name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}"> --}}
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                            @endif
                        </div>

                        <button type="submit" class="btn btn-danger px-4 float-right">Send</button>
                    
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection