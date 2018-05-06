@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">User Account:</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h4 class="text-success">Welcome back: {{ Auth::user()->first_name }}!</h4>
                    </div>
                    <div class="btn-group">
                        <a href="{{ url('/') }}" class="btn btn-info btn-lg">
                            Join.To.It
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
