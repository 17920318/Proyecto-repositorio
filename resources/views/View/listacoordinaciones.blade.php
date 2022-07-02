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
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url()->previous() }}"><i class="fa fa-home" aria-hidden="true"></i>
                             home</a></li>
                             @if ($esAdministrador == true )
                             <li class="nav-item"><a class="nav-link" href="{{ url('/mostrar') }}"><i class="fa-solid fa-user"></i> {{ auth()->user()->name }}</a>

                  @endif
                    </ul>
                    
                </div>
                
            </div>
        </nav>
        <header class="py-5">
           
            <div class="container px-lg-7">
         <a class="btn btn-primary" href="{{ url()->previous() }}" role="button"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>Regresar</a>
                <center>
                <h1 class="display-5 fw-bold mt-0">COORDINACIONES</h1>
                </center>
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-2 m-lg-5">
                     
                        <form class="row g-3" method="post" action="{{ route('lista.store') }}">
                            @csrf 
                            <div class="col-md-3">
                                <label for="coordinacion" class="form-label">Seleccionar</label>
                            <select class="form-select" name="coordinacion" aria-label="Default select example">
                                <option selected>Coordinaciones</option>
                                @foreach($coordinaciones as $coordinacion)
                                <option value="{{$coordinacion->id}}">{{$coordinacion->descripcion}}</option>
                              @endforeach
                              </select>
                            </div>
                            <div class="col-md-4">
                                <label for="tipo class="form-label">Seleccionar</label>
                            <select class="form-select" name="tipo" aria-label="Default select example">
                                @foreach($tipomateriales as $tipo)
                                <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>";
                            @endforeach
                            
                              </select>
                            </div>
                            <div class="col-md-4">
                              <button type="submit" class="btn btn-primary btn-form" style="display: block"><i class="fa-solid fa-magnifying-glass" target="_blank"></i>     Buscar</button>
                            
                            </div>
                          

                          </form>

                    </div>
                </div>
        
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
                
                
                .bg-dark {
                    --bs-bg-opacity: 1;
                background-color: rgb(65, 9, 117) !important;
                }
                .bg-orange{
                    background-color: rgb(184, 129, 12) !important;
                }
            </style>

            </div>
        </header>
       


    </body>
</html>