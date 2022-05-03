@extends('views.layouts')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD with Image Upload Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('layouts.create') }}"> Crea una nueva imagen</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>Image</th>
            <th>documento</th>
            <th>descripcion</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($repositorio as $repositorio)
        <tr>
            <td>{{ ++$i }}</td>
            <td><img src="/image/{{ $image->image }}" width="100px"></td>
            <td>{{ $image->name }}</td>
            <td>{{ $image->detail }}</td>
            <td>
                <form action="{{ route('layouts.destroy',$image->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('layouts.show',$image->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('layouts.edit',$image->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $repositorio->links() !!}
        
@endsection