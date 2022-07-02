@extends('plantilla')

@section('content')
    <br>

    <a class="btn btn-primary" href="{{ url()->previous() }}" role="button"><i class="fa fa-chevron-circle-left"
            aria-hidden="true"></i>
        Regresar</a>
    <center>
        <h2 class="display-8 fw-bold mt-0">COLEGIO DE PROFESIONISTAS, COMPARTIR CONOCIMIENTO</h2>
    </center>
    <br>
    <div class="p-4 p-lg-5 bg-light rounded-3 text-center">

        <div class="m-2 m-lg-5">
            <table class="table responsive table-striped">
                <tbody>
                    <tr>

                        <th scope="col">Fecha</th>
                        <th scope="col">Archivo</th>
                        <th scope="col">Vizualizar</th>
                        <th scope="col">Acciones</th>

                    </tr>
                    @foreach ($repositorios as $repo)
                        <form action="{{ route('busqueda.destroy', $repo->id) }}" method="post">
                            @csrf
                            <td>
                                {{ $repo->fecha }}
                            </td>

                            <td>

                                {{ $repo->documento }}

                            </td>

                            <td>


                                <a href="{{ $repo->url }}"target="_blank">{{ $repo->url }}<br></a>
                                @foreach (preg_split('/\|/', $repo->file) as $archivo)
                                    <a href="images/{{ $archivo }}" target="_blank">
                                        {{ $archivo }} <br> </a>

                                
                                @endforeach
                            </td>
                            <td>
                                <a class="btn btn-warning  btn-sm" href="{{ url('download/' . $repo->id) }}"
                                    role="button"><i class="fa fa-download" aria-hidden="true"></i>
                                    Descargar</a>
                                    
                                @php
                                @endphp
                                @if ($esAdministrador === true)
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact"
                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                            aria-hidden="true"></i> Delete</button>

                                    <a class="btn btn-success  btn-sm" href="{{ route('busqueda.edit', $repo->id) }}"
                                        role="button"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                        Editar</a>
                            </td>
                        @else
                    @endif
                    </form>

                    </tr>
                    @endforeach
                </tbody>
            </table>
            <style>
                form {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: space-between;
                }

                .btn-form {
                    box-sizing: border-box;
                    margin-top: 30px;
                }

                .fa-scale-balanced,
                .fa-book,
                .fa-file-signature,
                .fa-people-line,
                .fa-users-between-lines,
                .fa-people-group,
                .fa-users-gear {

                    font-size: 8ch;
                }

                .col-xxl-4 {
                    width: 30%;
                    margin-left: auto;
                    margin-right: auto;
                }

                .feature {
                    height: 10rem;
                    width: 10rem;
                    font-size: 8ch;
                    background-color: rgb(65, 9, 117) !important;
                }

                .bg-dark {
                    --bs-bg-opacity: 1;
                    background-color: rgb(65, 9, 117) !important;
                }
            </style>
        </div>
    </div>
    </div>
@endsection
