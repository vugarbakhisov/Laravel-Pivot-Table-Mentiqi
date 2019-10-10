@extends('backend.layouts.layouts')
@section('page')
{{--    <script type="text/javascript" src="{{asset('backend/tinymce/js/tinymce/tinymce.min.js')}}">--}}
{{--    </script>--}}

{{--    <script type="text/javascript">--}}
{{--        tinymce.init({--}}
{{--            entity_encoding : "raw",--}}
{{--            selector: "textarea",--}}
{{--            theme: "modern",--}}
{{--            plugins: [--}}
{{--                "advlist autolink lists link image charmap print preview hr anchor pagebreak",--}}
{{--                "searchreplace wordcount visualblocks visualchars code fullscreen",--}}
{{--                "insertdatetime media nonbreaking save table contextmenu directionality",--}}
{{--                "emoticons template paste textcolor colorpicker textpattern imagetools"--}}
{{--            ],--}}
{{--            toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",--}}
{{--            toolbar2: "print preview media | forecolor backcolor emoticons | ltr rtl",--}}
{{--            image_advtab: true,--}}
{{--            templates: [--}}
{{--                { title: 'Test template 1', content: 'Test 1' },--}}
{{--                { title: 'Test template 2', content: 'Test 2' }--}}
{{--            ],--}}

{{--        });--}}

{{--    </script>--}}

{{--<script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>--}}
{{--<script>--}}
{{--    CKEDITOR.replace( 'text' );--}}
{{--</script>--}}

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>






<div class="container">
  <h2>News</h2>
 <form method="POST" action="{{route('news.save')}}" enctype="multipart/form-data">
     @csrf
    <div class="form-group">
        <div class="col-md-6">
{{--            <select class="js-example-basic-multiple" name="category_ids[]" multiple="multiple">--}}
{{--            @foreach($news as $data)--}}
{{--              <input type="checkbox" name="category_ids[]" value="{{$data->id}}">{{$data->name}}</input>--}}

{{--                    <option value="{{$data->id}}">{{$data->name}}</option>--}}

{{--            @endforeach--}}
{{--            </select>--}}

            <select class="js-example-basic-multiple" name="states[]" multiple="multiple">
                <option value="AL">Alabama</option>

                <option value="WY">Wyoming</option>
            </select>

        </div>
    </div>
<div class="form-group">
    <div class="form-group">
        <div class="col-md-6">
            <label for="usr">title:AZ</label>
            <input type="text" name="title[]" class="form-control" id="usr">
        </div>
        <div class="col-md-6">
            <label for="usr">title:EN</label>
            <input type="text" name="title[]" class="form-control" id="usr">
        </div>
        <div class="col-md-6">
            <label for="usr">Name:AZ</label>
            <input type="text" name="name[]" class="form-control" id="usr">
        </div>
        <div class="col-md-6">
            <label for="usr">Name:EN</label>
            <input type="text" name="name[]" class="form-control" id="usr">
        </div>

      <div class="col-md-6">
      <label for="usr">Slug:AZ</label>
      <input type="text" name="slug[]" class="form-control" id="usr">
      </div>
        <div class="col-md-6">
            <label for="usr">Slug:EN</label>
            <input type="text" name="slug[]" class="form-control" id="usr">
        </div>
        <div class="col-md-6">
            <label for="usr">Text:AZ</label><br>
            <textarea name="text[]" id="text" cols="50" rows="5" ></textarea><br>
        </div>
        <div class="col-md-6">
            <label for="usr">Text:EN</label><br>
            <textarea name="text[]" id="text" cols="50" rows="5" ></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6">
            <label for="usr">Images:</label>
            <input type="file" name="img[]" multiple class="form-control" id="usr">
        </div>
    </div>
    </div>
    <br>
     <button class="btn btn-success" type="submit" class="btn btn-primary btn-block">Əlavə Et</button>

  </form>
</div>
@endsection
