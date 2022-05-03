@extends('plantilla')
  
@section('content')
<div class="container px-lg-5">
    <center>
    <h1 class="display-8 fw-bold mt-0">COLEGIO DE PROFESIONISTAS, COMPARTIR CONOCIMIENTO</h1>
    </center>
    <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
        <div class="m-2 m-lg-5">
            
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
                    <option selected value="-1">Todas</option>
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
        </div>   
    </div>
</div>
@endsection