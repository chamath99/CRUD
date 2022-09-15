@extends('city.layout')

@section('content')
<div class="form-group row">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Add New Record</h2>
        </div>
        <div class="float-right">
          <a href="{{route('city.index')}}" class="btn btn-success">Back</a>  
        </div>
    </div>
</div>
<form action="{{route('city.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <strong>Code:</strong>
                <input type="text" class="form-control" name="code" placeholder="Enter City Code">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" class="form-control" name="name" placeholder="Enter City Name">
            </div>
        </div>

        <div class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</form>
@endsection