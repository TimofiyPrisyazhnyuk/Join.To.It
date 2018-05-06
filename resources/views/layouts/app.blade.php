<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap core CSS-->
    <link href="{{ url('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ url('vendor/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ url('css/sb-admin.css') }}" rel="stylesheet">
</head>
<body class="bg-dark">

<div class="container">

    @yield('content')

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
{{--<script src="{{ url('vendor/jquery/jquery.js') }}"></script>--}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Core plugin JavaScript-->
<script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
</body>
</html>
