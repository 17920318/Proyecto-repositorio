@extends('plantilla')
  
@section('content')
<div class="container px-lg-5">
    <center>
    <h1 class="display-8 fw-bold mt-0">COLEGIO DE PROFESIONISTAS, COMPARTIR CONOCIMIENTO</h1>
    </center>
    <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
        <div class="m-2 m-lg-5">
            <table class="table">
                <tbody>
                @foreach($repositorios as $repo)
                    <tr>
                        <td>
                            {{ $repo->fecha }}
                        </td>
                        <td>
                            {{ $repo->observaciones }}
                        </td>
                        <td>
                            {{ $repo->documento }}
                        </td>                                                   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>   
    </div>
</div>
@endsection