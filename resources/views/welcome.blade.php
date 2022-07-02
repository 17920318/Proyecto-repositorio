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
            <img src="{{asset('image/logo2.png')}}" alt="logo" width="7%" height="auto" margin_left=auto margin_right= auto><br>
            <a class="navbar-brand"><h5>COLEGIO DE PROFESIONISTAS COMPARTIR EL CONOCIMIENTO A.C.</h5></a>
            <br>
            <br>
            <div class="container px-lg-3">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/informacion') }}"><i class="fa fa-hand-o-right" style=" color: rgb(201, 177, 25);"></i> Conócenos</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}"><i class="fa-solid fa-user" style=" color: rgb(201, 177, 25);"></i> Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('/contactos') }}"><i class="bi bi-chat-dots" style=" color: rgb(201, 177, 25);"></i> ¿Quieres una Consultoría?</a></li>
                    </ul>  
                </div>
        </nav>
        <!-- Header-->
        <header class="py-6">
            <div class="container px-lg-6">
                <center>
                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('image/principal.jpg')}}" class="d-block w-100" alt="principal">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('image/convenio.jpg')}}" class="d-block w-100" alt="salon de clases5">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('image/2.jpg')}}" class="d-block w-100" alt="salon de clases2">
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('image/3.jpg')}}" class="d-block w-100" alt="salon de clases3">
                      </div>
                </div>
                </center>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
                </div>
                  <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-2 m-lg-5">
                        <h1 class="display-8 fw-bold mt-0"><p class="m-0 text-center text-black">Explora Nuestro Repositorio</p></h1>
                        <br>
                        <form class="row g-3" method="post" action="{{ route('busqueda.store') }}">
                            @csrf
                            <div class="col-md-4">
                              <label for="tema" class="form-label">Tema</label>
                              <input type="text" class="form-control" id="tema" name="tema">
                            </div>
                            <div class="col-md-4">
                              <label for="titulo" class="form-label">Titulo</label>
                              <input type="text" class="form-control" id="titulo" name="titulo">
                            </div>
                           
                            <div class="col-md-4">
                                <label for="anio" class="form-label">Año</label>
                            <select class="form-select" name="anio" aria-label="Default select example">
                                <option selected value="-1">Todos</option>
                                @php
                                    $year = date('Y');
                                    for ($i=$year; $i>=2009; $i--){
                                        echo "<option value='" . $i ."'>".$i. "</option>";
                                    }
                                @endphp
                              </select>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="mes" class="form-label">Mes</label>
                            <select class="form-select" name="mes" aria-label="Default select example">
                                <option selected value="-1">Todos</option>
                               
                                
                                
                                <option value="1">Enero</option>
                                <option value="2">Febrero</option>
                                <option value="3">Marzo</option>
                                <option value="4">Abril</option>
                                <option value="5">Mayo</option>
                                <option value="6">Junio</option>
                                <option value="7">Julio</option>
                                <option value="8">Agosto</option>
                                <option value="9">Septiembre</option>
                                <option value="10">Octubre</option>
                                <option value="11">Noviembre</option>
                                <option value="12">Diciembre</option>
                               
                              </select>
                            </div>
                            <div class="col-md-4">
                                <label for="tipo" class="form-label">Tipo</label>
                            <select class="form-select" name="tipo" aria-label="Default select example">
                                @foreach($tipomateriales as $tipo)
                                    <option value="{{$tipo->id}}">{{$tipo->descripcion}}</option>";
                                @endforeach
                              </select>
                            </div>
                            <div class="col-md-4">
                              <label for="coordinacion" class="form-label">Coordinaciones</label>
            
                            <select class="form-select" name="coordinacion" aria-label="Default select example">
                              @foreach($coordinaciones as $coordinacion)
                                <option value="{{$coordinacion->id}}">{{$coordinacion->descripcion}}</option>
                              @endforeach
                            </select>
                          </div>
                          
                            <center>
                            <div class="col-md-6">
                              <button type="submit" class="btn btn-lg btn-warning" style="display: block"><i class="fa-solid fa-magnifying-glass"></i>     buscar</button>
                            </div>
                            </center>
                          </form>
                    </div>   
                </div>
            </div>
            <p class="fs-6"></p>
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
                .fa-scale-balanced ,.fa-book, .fa-file-signature, .fa-people-line, .fa-users-between-lines, .fa-people-group, .fa-users-gear {
                
                    font-size: 8ch;
                }
               
                .col-xxl-4{
                    width: 30%;
                    margin-left: auto;
                    margin-right: auto;
                }
                .feature{
                    height: 10rem;
                width: 10rem;
                font-size: 8ch;
                background-color: rgb(84, 29, 136) !important;
                }
            
                .bg-dark {
                    --bs-bg-opacity: 1;
                 background-color: rgb(78, 30, 124) !important;
                }
                .bg-orange{
                    background-color: rgb(231, 166, 25) !important;
                }
                
            </style>
            </div>
            </div>
            </div>
            </header>
            <!-- Page Content-->
            <section class="pt-4">
            <div class="container px-lg-5">
            <!-- Page Features-->
            <div class="row gx-lg-4">
                <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                            <a class="btn btn-outline-warning" href="{{route('formulario', ['id' => 6]) }}" role="button"><i class="fa-solid fa-scale-balanced"></i></a>
                            
                        </div>
                        <a class="btn btn-darck" href="{{route('formulario', ['id' => 6]) }}" role="button"><h2 class="fs-4 fw-bold">Propuestas de ley</h2></a>
                        
                        <p class="mb-0"></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                            <a class="btn btn-outline-warning" href="{{route('formulario', ['id' => 5]) }}" role="button"><i class="fa-solid fa-book"></i></a>
                        </div>
                        <a class="btn btn-darck" href="{{route('formulario', ['id' => 5]) }}" role="button"><h2 class="fs-4 fw-bold">Articulos</h2></a>
                   
                        <p class="mb-0"></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                            <a class="btn btn-outline-warning" href="{{route('formulario', ['id' => 3]) }}" role="button"><i class="fa-solid fa-file-signature"></i></a>
                        </div> 
                        <a class="btn btn-darck" href="{{route('formulario', ['id' => 3]) }}" role="button"><h2 class="fs-4 fw-bold">Infografías</h2></a>
                         
                        <p class="mb-0"></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                            <a class="btn btn-outline-warning" href="{{route('formulario', ['id' => 4]) }}" role="button"><i class="fa-solid fa-people-line"></i></a>
                        </div>
                        <a class="btn btn-darck" href="{{route('formulario', ['id' => 4]) }}"role="button"><h2 class="fs-4 fw-bold">Mesa de profesionitas</h2></a>
                        <p class="mb-0"></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                            <a class="btn btn-outline-warning" href="{{route('formulario', ['id' => 1]) }}" role="button"><i class="fa-solid fa-users-between-lines"></i></a>
                        </div>
                            <a class="btn btn-darck" href="{{route('formulario', ['id' => 1]) }}" role="button"><h2 class="fs-4 fw-bold">Talleres</h2></a>
                       
                        <p class="mb-0"></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                            <a class="btn btn-outline-warning" href="{{route('formulario', ['id' => 2]) }}"role="button"><i class="fa-solid fa-people-group"></i></a>
                        </div>
                        
                            <a class="btn btn-darck" href="{{route('formulario', ['id' => 2]) }}"role="button"><h2 class="fs-4 fw-bold">Foros</h2></a>
                
                        <p class="mb-0"></p>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                    <div class="card bg-light border-0 h-100">
                        <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                            <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                <a class="btn btn-outline-warning" href="{{route('formulario', ['id' => 7]) }}"role="button"><i class="fa-solid fa-people-group"></i>
                </a>
                            </div>
                                <a class="btn btn-darck" href="{{route('formulario', ['id' => 7]) }}" role="button"><h2 class="fs-4 fw-bold">Convenios</h2></a>
                           
                            <p class="mb-0"></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xxl-4 mb-5">
                <div class="card bg-light border-0 h-100">
                    <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                        <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                            <a class="btn btn-outline-warning" href="{{ url('/lista') }}" role="button"><i class="fa-solid fa-users-gear"></i></a>
                        </div>
                
                            <a class="btn btn-darck" href="{{ url('/lista') }}" role="button"><h2 class="fs-4 fw-bold">Coordinaciones</h2></a>
                        <p class="mb-0"></p>
                    </div>
                </div>
                </div>
                
                </div>
                </section>
            <main class="py-4">
            @yield('content')
            </main>
            <!-- Footer-->
            <footer class="py-5 bg-orange">
            <h4><div class="container"><p class="m-0 text-center text-black">Visita nuestras redes sociales:</p></div></h4>
            
            <center>
            <a href="https://www.facebook.com/ColegioDeProfesionistas" class="bi bi-facebook fa-3x " aria-hidden="true" span style=" color: blue;"></a>
            <a href="https://www.facebook.com/ColegioDeProfesionistas" class="bi bi-twitter fa-3x"></a>
            <br>
            <h4><div class="container"><p class="m-0 text-center text-black">Contáctanos:</p></div></h4>
            <a class="bi bi-telephone-plus fa-1x " aria-hidden="true" span style=" color: black;"> 0449512856280</a>
            <br>
            <a class="bi bi-google fa-1x" aria-hidden="true" span style=" color: black;"> presidencia.cpcc@gmail.com</a>
            
            </center>
            </footer>

            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            
            </body>
            
            </html>