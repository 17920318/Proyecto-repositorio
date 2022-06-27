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
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="{{asset('img/Logo.jpeg')}}" alt="logo" width="14%" height="auto" margin_left=auto margin_right= auto>

            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">Colegio de profesionistas, compatir conocimiento</a>
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('busqueda') }}"><i class="fa fa-home" aria-hidden="true"></i>
                             home</a></li>   
                             <li class="nav-item"><a class="nav-link" href="{{ url('/mostrar') }}"><i class="fa-solid fa-user"></i> {{ auth()->user()->name }}</a>
                    
                    </ul>
                    
                </div>
                
            </div>
        </nav>
    </head>
    <br>
    <br>
   
    <style>
        form{
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .btn-form{
            box-sizing: border-box;
            margin-top: 30px;
        }
        .col-xxl-4{
            width: 30%;
            margin-left: auto;
            margin-right: auto;
        }
        .container{
        
            margin-left: auto;
            margin-right: auto;
        }
        .feature{
            height: 10rem;
        width: 10rem;
        font-size: 8ch;
        background-color: rgb(65, 9, 117) !important;
        }
        .btn-primary{
            --bs-bg-opacity: 1;
        background-color: rgb(65, 9, 117) !important;
        }
        .card-header{
            --bs-bg-opacity: 1;
        background-color: rgb(233, 211, 10) !important;
        }
        .card-body{
            --bs-bg-opacity: 1;
        background-color: rgb(236, 234, 238) !important;
        }
        .form-group{
            background-color: rgb(241, 236, 245) !important;
        }
        .bg-dark {
            --bs-bg-opacity: 1;
        background-color: rgb(65, 9, 117) !important;
        }
        .bg-orange{
            background-color: rgb(184, 129, 12) !important;
        }
    </style>
</form>
<a class="btn btn-primary" href="{{ url()->previous() }}" role="button"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Regresar</a>

<center> 
<h1 class="display-8 fw-bold mt-0">EDITAR</h1>
</center> 
<br>
<section style= "pading-top:60px">
    <div class="container">
<div class="row-3">
    <div class="col-md-12">
        <div class="card">
            <center> 
            <div class="card-header">
        Editar Documento
    </div>
            </center>
    <center>
    <div class="card-body">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif 
        <form class = "row g-3" action="{{ route('busqueda.update',$repositorios->id)}} "method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
         
                <div class="col-md-6">
                    <label for="documento" class="form-label">Titulo</label>
                    <input type="text" class="form-control form-control-lg" id="documento" name="documento"
                    value="{{$repositorios->documento}}"
                    class="form-control" name="documento" />
                </div>
           
            <div class="col-md-6">
                <label for="descripcion" class="form-label">Descripcion</label>
                <input type="text" class="form-control form-control-lg" id="descripcion" name="descripcion"
                value="{{$repositorios->descripcion}}"
                class="form-control" name="descripcion" />
            </div>
            <div class="col-md-6">
                <label for="url" class="form-label">URL</label>
                <input type="text" class="form-control form-control-lg" id="url" name="url"
                value="{{$repositorios->url}}"
                class="form-control" name="url" />
            </div>
            <div class="form-group">
                                 
                <label for="file">Archivo:</label>
                <input type="file" id="file" accept="application/pdf, image/png, image/jpeg"
                 class="form-control" name="file[]" multiple   
                 onchange="preview(event, 'preview' );" />
                  
            </div>
            <div id="preview" ></div>


        </div>
    </div>
    <br>
 
       <center> 
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
       </center>
        </form>
    </div>
</section>
</div>
</div>
</header>
</body>
</html>