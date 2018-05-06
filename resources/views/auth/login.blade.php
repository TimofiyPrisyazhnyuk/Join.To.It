@extends('layouts.app')

@section('content')
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="exampleInputEmail1"
                           type="email" aria-describedby="emailHelp" value="{{ old('email') }}" required autofocus
                           placeholder="Enter email" name="email">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                         <strong>{{ $errors->first('email') }}</strong>
                     </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                           name="password" required id="exampleInputPassword1" type="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input"
                                   name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" type="submit">Login</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ url('/register') }}">Register an Account</a>
                <a class="d-block small" href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
        </div>
    </div>


    {{--<div class="container">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="col-md-8">--}}
    {{--<div class="map">--}}
    {{--<div class="map-header">{{ __('Login') }}</div>--}}

    {{--<div class="map-body">--}}
    {{--<form method="POST" action="{{ route('login') }}">--}}
    {{--@csrf--}}

    {{--<div class="form-group row">--}}
    {{--<label for="email"--}}
    {{--class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="email" type="email"--}}
    {{--class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"--}}
    {{--name="email" value="{{ old('email') }}" required autofocus>--}}

    {{--@if ($errors->has('email'))--}}
    {{--<span class="invalid-feedback">--}}
    {{--<strong>{{ $errors->first('email') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="form-group row">--}}
    {{--<label for="password"--}}
    {{--class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

    {{--<div class="col-md-6">--}}
    {{--<input id="password" type="password"--}}
    {{--class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"--}}
    {{--name="password" required>--}}

    {{--@if ($errors->has('password'))--}}
    {{--<span class="invalid-feedback">--}}
    {{--<strong>{{ $errors->first('password') }}</strong>--}}
    {{--</span>--}}
    {{--@endif--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row">--}}
    {{--<div class="col-md-6 offset-md-4">--}}
    {{--<div class="checkbox">--}}
    {{--<label>--}}
    {{--<input type="checkbox"--}}
    {{--name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}--}}
    {{--</label>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="form-group row mb-0">--}}
    {{--<div class="col-md-8 offset-md-4">--}}
    {{--<button type="submit" class="btn btn-primary">--}}
    {{--{{ __('Login') }}--}}
    {{--</button>--}}

    {{--<a class="btn btn-link" href="{{ route('password.request') }}">--}}
    {{--{{ __('Forgot Your Password?') }}--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</form>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection
