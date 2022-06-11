@extends('plantilla')
  
@section('content')
<div class="container px-lg-5">
                    <br>
                      <br>
            <form class="row g-3" method="post" action="{{ route('busqueda.store') }}">
                @csrf
                <center>
                <h1 class="display-8 fw-bold mt-0">Explora Nuestro Repositorio</h1>
            <br>    
            </center>
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
              <br>
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
<br>
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
    <center>
<div class="container"><p class="m-0 text-center text-white">Vista nuestras redes sociales:</p></div>
<br>
<a href="https://www.facebook.com/ColegioDeProfesionistas/" target="_blank"><img src="http://www.ariadne-comunicacion.com/blog/wp-content/uploads/2018/01/facebook.png" alt="Facebook"></a>
    </center>
</div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>

</body>

</html>

@endsection