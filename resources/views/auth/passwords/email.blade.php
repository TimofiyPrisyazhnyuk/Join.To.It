@extends('layouts.app')

@section('content')

    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
            <div class="text-center mt-4 mb-5">
                <h4>Forgot your password?</h4>
                <p>Enter your email address and we will send you instructions on how to reset your password.</p>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>

            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group">
                    <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                           name="email" value="{{ old('email') }}" required id="exampleInputEmail1" type="email"
                           aria-describedby="emailHelp"
                           placeholder="Enter email address">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="{{ url('/register') }}">Register an Account</a>
                <a class="d-block small mt-3" href="{{ url('/login') }}">Login Page</a>
            </div>
        </div>
    </div>

@endsection
