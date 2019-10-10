@extends('backend.layouts.layouts')
@section('page')
<div class="container">
  <h2>Categories</h2>
 <form method="POST" action="{{route('edit.save',$data->id)}}" enctype="multipart/form-data">
     @csrf
    <div class="form-group">
      <div class="col-md-6">
      <label for="usr">Name:</label>
      <input type="text" name="name" value="{{$data->name}}" class="form-control" id="usr">
      </div>
    </div>
    <br>
     <button class="btn btn-success" type="submit" class="btn btn-primary btn-block">Redaktə Et</button>

  </form>
</div>
@endsection
