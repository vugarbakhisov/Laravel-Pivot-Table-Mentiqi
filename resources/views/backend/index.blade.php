@extends('backend.layouts.layouts')
 @section('page')

    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">
          Categories

      </th>
      <th scope="col">Uptade</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
  @foreach($categories as $categori)
    <tr>

      <th scope="row">{{$categori->name}}</th>
</td>
        <td><a href="{{route('update',$categori->id)}}" class="btn btn-info">Categories uptade</a>
</td>
        <td> <a href="{{route('get.delete',$categori->id)}}" class="btn btn-danger">Categories delete</a>
 </td>
    </tr>
      @endforeach



  </tbody>
</table>
     <a href="{{route('get.insert')}}" class="btn btn-success">Categories insert</a>
@endsection


