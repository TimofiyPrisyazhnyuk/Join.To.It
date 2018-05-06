@extends('layouts.bootstrap')

@section('content')
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Map</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="col-md-7 float-left">

            {!! $map['js'] !!}
            {!! $map['html'] !!}

        </div>

        @permission('dasb_char_comp_access')
        <div class=" alert alert-secondary col-md-3 pull-right">
            <h5 class="text-danger">Create marker:</h5>

            @if(session('messageSuccess'))
                <div class="alert alert-success">
                    {{ session('messageSuccess') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="post" action="{{ route('create_markers') }}">
                @csrf
                <div class="form-group">
                    <label for="exampleInput1">Address:</label>
                    <input type="text" class="form-control" id="exampleInput1"
                           name="address" placeholder="address" value="{{ old('address') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInput1">Information about place:</label>
                    <input type="text" class="form-control" id="exampleInput1"
                           name="infowindow_content" placeholder="information" value="{{ old('infowindow_content') }}">
                </div>
                <button type="submit" class="btn btn-success">Create</button>
            </form>
        </div>
        @endpermission
    </div>

@endsection

@section('scripts')
    <!-- Bootstrap core JavaScript-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    {{--<script src="{{ url('vendor/jquery/jquery.js') }}"></script>--}}
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ url('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ url('js/sb-admin.min.js') }}"></script>
@endsection