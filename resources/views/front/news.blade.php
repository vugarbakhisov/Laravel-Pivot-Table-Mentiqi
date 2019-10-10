<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach($news as $n)
<h2>{{$n->name}}</h2>
@endforeach
</body>
</html>