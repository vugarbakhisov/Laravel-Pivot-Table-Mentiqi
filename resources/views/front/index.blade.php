<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title></title>
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Categoriya</th>
     
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $C)
    <tr>
      <th scope="row">#</th>
      <td><a href="{{route('front.news',$C->id)}}">{{$C->name}}</a></td>
    </tr>
    @endforeach
  </tbody>
</table>
</body>
</html>

