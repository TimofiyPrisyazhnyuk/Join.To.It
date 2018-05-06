@extends('layouts.bootstrap')

@section('content')

    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Welcome</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <div class="alert alert-secondary">
                    <h4>User account:</h4>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">User role</th>
                        <th scope="col">User email</th>
                        <th scope="col">User password</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>super_admin</td>
                        <td>join1@gmail.com</td>
                        <td>join1it1</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>admin</td>
                        <td>join2@gmail.com</td>
                        <td>join2it2</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>manager</td>
                        <td>join3@gmail.com</td>
                        <td>join3it3</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>auth_user</td>
                        <td>join4@gmail.com</td>
                        <td>join4it4</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>



@endsection

@section('scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    {{--<script src="{{ url('vendor/jquery/jquery.js') }}"></script>--}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ url('js/sb-admin.min.js') }}"></script>
@endsection