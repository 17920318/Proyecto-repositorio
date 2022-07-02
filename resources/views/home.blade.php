@extends('plantilla')

@section('content')
    
      <title>Profile Card</title>
      <link rel="stylesheet" type="text/css" href="style.css">
   </head>
   <body>
      <div class="card-container">
         <div class="upper-container">
	 <label for="documento" class="form-label">Información personal</label>
               <div class="author">
               <div class="panel-heading">¡¡Bienvenido!! {{ auth()->user()->name }}</p>
                </div>
               <div class="image-container">
             	<img src="{{asset('\image\usuario.png')}}" class="circular--square" alt="Cinque Terre" width="200" height="200">
                </a>
                <br>
            <br>
            </div>
         </div>
         <form class = "row g-3" action="{{ route('mostrar.update',$id_usuario = session("usuario_id"))}} "method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
         <div class="lower-container">
            <div class="col-md-8">
                <label for="documento" class="form-label">Nombre: </label>
                <input type="text" name="name" value="{{ auth()->user()->name }}">
            </div>
            <div class="col-md-8">
                <label for="documento" class="form-label">Correo: </label>
                <input type="text" name="email" value="{{ auth()->user()->email }}">

            </div>
            <div class="col-md-8">
                <label for="documento" class="form-label">Contraseña: </label>
                <input type="password" name="password" value="{{ auth()->user()->password }}">

            </div>
            <br>
            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
            <br>
           <br>
            <a class="btn btn-success  btn-lg"  href="{{ url('/logout')}}" role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                Cerrar Sesion</a>
        </div>
    </form>  
    <style>
                body{
            margin: 0px;
            padding: 0px;
            background: #f1f1f1;
            font-family: arial;
            box-sizing: border-box;
            }
            .card-container{
            width: 300px;
            height: 430px;
            background: #FFF;
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            box-shadow: 0px 1px 10px 1px #000;
            overflow: hidden;
            display: inline-block;
            }
            .upper-container{
            height: 150px;
            background: #7F00FF;
            }
            .image-container{
            background: white;
            width: 80px;
            height: 80px;
            border-radius: 50%;
            padding: 5px;
            transform: translate(100px,100px);
            }
            .image-container img{
            width: 80px;
            height: 80px;
            border-radius: 50%;
            }
            .lower-container{
            height: 280px;
            background: #FFF;
            padding: 20px;
            padding-top: 40px;
            text-align: center;
            }
            .lower-container h3, h4{
            box-sizing: border-box;
            line-height: .6;
            font-weight: lighter;
            }
            .lower-container h4{
            color: #7F00FF;
            opacity: .6;
            font-weight: bold;
            }
            .lower-container p{
            font-size: 16px;
            color: gray;
            margin-bottom: 30px;
            }
            .lower-container .btn{
            padding: 12px 20px;
            background: #7F00FF;
            border: none;
            color: white;
            border-radius: 30px;
            font-size: 12px;
            text-decoration: none;
            font-weight: bold;
            transition: all .3s ease-in;
            }
            .lower-container .btn:hover{
            background: transparent;
            color: #7F00FF;
            border: 2px solid #7F00FF;
            } 
</style> 
         </div>
      </div>
   </body>
   
</html>