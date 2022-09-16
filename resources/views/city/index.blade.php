@extends('city.layout')

@section('content')
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Laravel CRUD</h2>
        </div>
        <div class="float-right">
          <a href="{{route('city.create')}}" class="btn btn-success">Create</a>  
        </div>
    </div>
</div>

@if($msg = Session::get('add'))
   <div class="alert alert-success">
        <p>{{$msg}}</p>
   </div>
@endif

@if($msg = Session::get('edit'))
   <div class="alert alert-success">
        <p>{{$msg}}</p>
   </div>
@endif

@if($msg = Session::get('delete'))
   <div class="alert alert-danger">
        <p>{{$msg}}</p>
   </div>
@endif

<table class="table table-boardered">
    <tr>
        <th>ID</th>
        <th>Code</th>
        <th>Name</th>
        <th>Action</th>

    </tr>
@foreach ($city as $data)

    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->code}}</td>
        <td>{{$data->name}}</td>
        <td>
            <form action="{{route('city.destroy',$data->id)}}" method="POST">
            <a href="{{route('city.edit',$data->id)}}" class="btn btn-primary">Edit</a>
              @csrf
              @method('DELETE')  
                <button type="" class="btn btn-danger">Delete</button>
            </form>   
        </td>
    </tr>
    @endforeach
</table>
@endsection