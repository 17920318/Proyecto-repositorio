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
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"><i class="fa-solid fa-chart-simple"></i></i>
                            Estadisticas</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"><i class="fa-solid fa-user-lock"></i></i>
                            roles</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ url('/logout') }}"><i class="fa fa-home" aria-hidden="true"></i>
                             home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="#!"><i class="fa-solid fa-user"></i> usuario</a></li>
                    </ul>
                    
                </div>
                
            </div>
        </nav>
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <center>
                <h1 class="display-5 fw-bold mt-0">COLEGIO DE PROFESIONISTAS, COMPARTIR CONOCIMIENTO</h1>
                </center>
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-2 m-lg-5">
                        
                        <form class="row g-3">
                            <div class="col-md-4">
                              <label for="inputEmail4" class="form-label">Tema</label>
                              <input type="text" class="form-control" id="inputEmail4">
                            </div>
                            <div class="col-md-4">
                              <label for="inputPassword4" class="form-label">Titulo</label>
                              <input type="text" class="form-control" id="inputPassword4">
                            </div>
                           
                            <div class="col-md-4">
                                <label for="inputAño" class="form-label">Año</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Todos</option>
                                <option value="1">2022</option>
                                <option value="2">2021</option>
                                <option value="3">2020</option>
                                <option value="4">2019</option>
                                <option value="5">2018</option>
                                <option value="6">2017</option>
                                <option value="7">2016</option>
                                <option value="8">2015</option>
                                <option value="9">2014</option>
                              </select>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="inputAño" class="form-label">Mes</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Todos</option>
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
                                <label for="inputAño" class="form-label">Tipo</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Todos</option>
                                <option value="1">Propuestas de ley</option>
                                <option value="2">Talleres</option>
                                <option value="3">Foros</option>
                                <option value="4">Infografías</option>
                                <option value="5">Articulos</option>
                                <option value="5">Mesa de profesionistas</option>

                              </select>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="inputAño" class="form-label">Coordinaciones</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Todas</option>
                                <option value="1">Coord.Gral. de Profesionales de la comunicación</option>
                                <option value="2">Coord.Gral. de Profesionales de la contaduría</option>
                                <option value="3">Coord.Gral. de Profesionales de la optometría</option>
                                <option value="4">Coord.Gral. de Profesionales de la nutrición</option>
                                <option value="5">Coord.Gral. de Profesionales de la informática</option>
                                <option value="6">Coord.Gral. de Profesionales del derecho</option>
                                <option value="7">Coord.Gral. de Profesionales de la criminalística y criminología</option>
                                <option value="8">Coord.Gral. de Profesionales de la comunicación</option>
                                <option value="9">Coord.Gral. de Profesionales de las ciencias forenses</option>
                                <option value="10">Coord.Gral. de Profesionales de la educación</option>
                                <option value="11">Coord.Gral. de Profesionales de la imagen estratégica</option>
                                <option value="13">Coord.Gral. de Profesionales de la ingeniería civil</option>
                              </select>
                            </div>
                            <center>
                            <div class="col-md-6">
                              <button type="submit" class="btn btn-lg btn-warning" style="display: block"><i class="fa-solid fa-magnifying-glass"></i>     buscar</button>
                            </div>
                            </center>
                          </form>
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
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <a class="btn btn-outline-warning" href="{{ url('/filtro') }}" role="button"><i class="fa-solid fa-scale-balanced"></i></a>
                                    
                                </div>
                                <a class="btn btn-darck" href="{{ url('/filtro') }}" role="button"><h2 class="fs-4 fw-bold">Propuestas de ley</h2></a>
                                
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <a class="btn btn-outline-warning" href="{{ url('/filtro') }}" role="button"><i class="fa-solid fa-book"></i></a>
                                </div>
                                <a class="btn btn-darck" href="{{ url('/filtro') }}" role="button"><h2 class="fs-4 fw-bold">Articulos</h2></a>
                           
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <a class="btn btn-outline-warning" href="{{ url('/filtro') }}" role="button"><i class="fa-solid fa-file-signature"></i></a>
                                </div> 
                                <a class="btn btn-darck" href="{{ url('/filtro') }}" role="button"><h2 class="fs-4 fw-bold">Infografías</h2></a>
                                 
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <a class="btn btn-outline-warning" href="{{ url('/filtro') }}" role="button"><i class="fa-solid fa-people-line"></i></a>
                                </div>
                                <a class="btn btn-darck" href="{{ url('/filtro') }}" role="button"><h2 class="fs-4 fw-bold">Mesa de profesionitas</h2></a>
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <a class="btn btn-outline-warning" href="{{ url('/filtro') }}" role="button"><i class="fa-solid fa-users-between-lines"></i></a>
                                </div>
                                    <a class="btn btn-darck" href="{{ url('/filtro') }}" role="button"><h2 class="fs-4 fw-bold">Talleres</h2></a>
                               
                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <a class="btn btn-outline-warning" href="{{ url('/filtro') }}" role="button"><i class="fa-solid fa-people-group"></i></a>
                                </div>
                                
                                    <a class="btn btn-darck" href="{{ url('/filtro') }}" role="button"><h2 class="fs-4 fw-bold">Foros</h2></a>

                                <p class="mb-0"></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xxl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-4 mt-n4">
                                    <a class="btn btn-outline-warning" href="{{ url('/filtro') }}" role="button"><i class="fa-solid fa-users-gear"></i></a>
                                </div>

                                    <a class="btn btn-darck" href="{{ url('/filtro') }}" role="button"><h2 class="fs-4 fw-bold">Coordinaciones</h2></a>
                                <p class="mb-0"></p>
                            </div>
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
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        
    </body>

</html>
