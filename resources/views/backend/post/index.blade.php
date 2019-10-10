@extends('../backend.layouts.layouts')
 @section('page')


<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Title</th>
        <th>News_Name</th>
      <th scope="col">Categories</th>
        <th>Images</th>

        <th>status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($news as $n)
      <tr>
          <td>{{$n->title}}</td>
          <td>{{$n->name}}</td>
        <td>{{$n->name}}</td>
        <td>
          @foreach($n->categories as $c)
            <span class="badge badge-light">{{$c->name}}</span>
          @endforeach
        </td>
          @foreach($n->image as $img)


          <td><img style="width:75px;" src="/image/{{$img->images}}"  alt=""></td>
          @endforeach
        <td><a href="{{route('news.edit',$n->id)}}">Update</a><br><br>
          <a href="{{route('news.delete',$n->id)}}" class="btn btn-success">Delete</a>
          <td>
              <a href="{{route('news.change_status',$n->id)}}" class="change_status_btn btn btn-{{$n->status == 0 ? 'success' : 'danger'}}">
                  {{$n->status == 0 ? 'Aktiv et' : 'Deaktiv Et'}}
              </a>

          </td>

        </td>

      </tr>
    @endforeach
  </tbody>
</table>


<a href="{{route('news.insert')}}" class="btn btn-success">Post insert</a>
 @endsection

