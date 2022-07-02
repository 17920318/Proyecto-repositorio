<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Colegio de profesionistas </title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="asset({img/taller})" rel="stylesheet" />
        <script src="https://kit.fontawesome.com/f687c855f2.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/6.0.0-beta.2/dropzone.min.css" integrity="sha512-qkeymXyips4Xo5rbFhX+IDuWMDEmSn7Qo7KpPMmZ1BmuIA95IPVYsVZNn8n4NH/N30EY7PUZS3gTeTPoAGo1mA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.2/dropzone.min.css" integrity="sha512-3g+prZHHfmnvE1HBLwUnVuunaPOob7dpksI7/v6UnF/rnKGwHf/GdEq9K7iEN7qTtW+S0iivTcGpeTBqqB04wA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">
 
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
         <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="{{asset('image/logo2.png')}}" alt="logo" width="7%" height="auto" margin_left=auto margin_right= auto>
            <a class="navbar-brand"><h5>COLEGIO DE PROFESIONISTAS COMPARTIR EL CONOCIMIENTO A.C.</h5></a>
            <br>
            <br>
            <div class="container px-lg-5">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                </div>
                
            </div>
        </nav>
    </head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<body>
    <br>
    <center>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                        <div class="card card-header"><h2 class="display-8 fw-bold mt-0">Contáctanos</h2></div>
                            <div class="card-body">
                        @if (Session::has('success'))
                            <div class="alert alert-success">

                                {{ Session::get('success') }}

                            </div>
                        @endif

                        {!! Form::open(['route' => 'contactos']) !!}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">

                            {!! Form::label('Nombre:') !!}

                            {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => 'Enter Name']) !!}

                            <span class="text-danger">{{ $errors->first('name') }}</span>

                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">


                            {!! Form::label('Email:') !!}

                            {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => 'Enter Email']) !!}

                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">

                            {!! Form::label('Mensaje:') !!}

                            {!! Form::textarea('message', old('message'), ['class' => 'form-control', 'placeholder' => 'Enter Message']) !!}

                            <span class="text-danger">{{ $errors->first('message') }}</span>

                        </div>

                        <div class="form-group">

                            <button class="btn btn-primary">Contactanos</button>


                        </div>

                        {!! Form::close() !!}

                    </div>
        </center>
</body>
<style>
    
    .btn-primary{
        --bs-bg-opacity: 1;
    background-color: rgb(65, 9, 117) !important;
    }
    .card-header{
        --bs-bg-opacity: 1;
    background-color: rgba(233, 182, 27, 0.779) !important;
    }
    .bg-dark {
        --bs-bg-opacity: 1;
    background-color: rgb(65, 9, 117) !important;
    }
    .bg-orange{
        background-color: rgb(114, 29, 212) !important;
    }
</style>

</html>
