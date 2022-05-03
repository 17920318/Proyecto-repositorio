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
            <img src="{{asset('img/Logo.jpeg')}}" alt="logo" width="14%" height="auto" margin_left=auto margin_right= auto>

            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!">Colegio de profesionistas, compatir conocimiento</a>
               
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!"><i class="fa fa-home" aria-hidden="true"></i>
                             home</a></li>
                        
                        <li class="nav-item"><a class="nav-link" href="#!"><i class="fa-solid fa-user"></i> usuario</a></li>
                    </ul>
                    
                </div>
                
            </div>
        </nav>
        <header class="py-5">
           
            <div class="container px-lg-7">
                <center>
                <h1 class="display-5 fw-bold mt-0">EXPLORAR</h1>
                </center>
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-2 m-lg-5">
                     
                        <form class="row g-3">
                            
                            <div class="col-md-3">
                                <label for="inputAño" class="form-label">Seleccionar</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Coordinaciones</option>
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
                              </select>
                            </div>
                            <div class="col-md-4">
                                <label for="inputAño" class="form-label">Seleccionar</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Todo</option>
                                <option value="1">Propuestas de ley</option>
                                <option value="2">Mesa de profesionistas</option>
                                <option value="3">Foros</option>
                                <option value="4">Talleres</option>
                                <option value="5">Infografías</option>
                                <option value="3">Articulos</option>
                            
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