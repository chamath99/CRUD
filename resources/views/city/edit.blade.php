@extends('city.layout')

@section('content')
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Edit Record</h2>
        </div>
        <div class="float-right">
          <a href="{{route('city.index')}}" class="btn btn-success">Back</a>  
        </div>
    </div>
</div>
<form action="{{route('city.update',$city->id)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                <input type="text" class="form-control" value="{{$city->code}}" name="code" placeholder="Enter City Code">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" class="form-control" value={{$city->name}} name="name" placeholder="Enter City Name">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</form>
@endsection