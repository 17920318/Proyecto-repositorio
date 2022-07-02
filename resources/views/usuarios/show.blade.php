@extends('plantilla')

@section('content')
<center>
    <br>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="card">
                                    <div class="card card-header"><h2 class="display-8 fw-bold mt-0">Usuario</h2></div>
                                        <div class="card-body">
                                            <form class = "row " action="{{ route('mostrar.update',$id_usuario = session("usuario_id"))}} "method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')
                                            <p class="lower-container">
                                                <label for="documento" class="form-label">Información personal</label>
                                                <div class="author">
                                                    <div class="panel-heading">¡¡Bienvenido!! {{ auth()->user()->name }}</p>
                                                    </div>
                                                        <img src="{{asset('\image\usuario.png')}}" class="circular--square" alt="Cinque Terre" width="200" height="200">
                                                    </a>
                                                    <br>
                                                    <br>
                                                    <div class="col-md-8">
                                                        <label for="documento" class="form-label">Nombre: </label>
                                                        <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="documento" class="form-label">Correo: </label>
                                                        <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}">

                                                    </div>
                                                    <div class="col-md-8">
                                                        <label for="documento" class="form-label">Contraseña: </label>
                                                        <input type="password" class="form-control" name="password" value="{{ auth()->user()->password }}">

                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary btn-lg" >Guardar</button>
                                                    <br>
                                                   <br>
                                                    <a class="btn btn-success  btn-lg"  href="{{ url('/logout')}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Cerrar Sesion</a>
                                                </div>
                                            </form>    
                                            </p>    
                                        </div>
                                    </div>
                                </div>
                            </div>                         
                        </div>
                    </center>
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
                            background-color: rgb(219, 161, 35) !important;
                        }
                        
                        .bg-dark {
                            --bs-bg-opacity: 1;
                        background-color: rgb(65, 9, 117) !important;
                        }
                        .bg-orange{
                            background-color: rgb(184, 129, 12) !important;
                        }

                        .circular--square {
                        border-radius: 50%;
                        }
                        .card{
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                    transition: 0.3s;
                    border-radius: 5px; /* 5px rounded corners */
                    }
                    .lower-container{
                    text-align: center;
                    }
                    </style>
        
                    
                </div>    
            </div>   
        </div>
    </div>
@endsection  