@extends('backend.layouts.layouts')
@section('page')



  <h2>Categories</h2>
 <form method="POST" action="{{route('news.edit.save',$data->id)}}" enctype="multipart/form-data">
     @csrf
     <label for="usr">Cari sekil:</label>

     <style>
         .container {

             position: relative;
             width: 75%;
             max-width: 400px;


         }

         .container img {
             width: 100%;
             height: auto;
             padding:10px;
             margin-bottom:40px;



         }

         .container .btn {
             position: absolute;
             top: 20px;
             left: 80%;

             transform: translate(-50%, -50%);
             -ms-transform: translate(-50%, -50%);
             /*background-color: #555;*/
             /*color: white;*/
             font-size: 12px;
             padding: 6px 12px;
             border: none;
             cursor: pointer;
             border-radius: 10px;
             text-align: center;
         }

         .container .btn:hover {
             background-color: black;
         }
     </style>

     @foreach($data->image as $img)
         <div class="container" >

             <img  src="/image/{{$img->images}}" alt="Snow" style="  width:300px;
             height: auto;
             padding:10px;
             margin-bottom:40px;" >


             <a class="btn btn-danger"  href="{{route('image.delete',$img->id)}}">Sil</a>



         </div>

     @endforeach


     <div class="form-group">
         <div class="form-group">
             <div class="col-md-6">
                 <label for="usr">Image:upload</label>
                 <input type="file" name="img[]"  multiple class="form-control" id="usr">
             </div>
             <div class="col-md-6">
                 <label for=""></label>
                 <label for="usr">title:AZ</label>
                 <input type="text" value="{{$data->gettranslation('title','az')}}" name="title[]" class="form-control" id="usr">
             </div>
             <div class="col-md-6">
                 <label for="usr">title:EN</label>
                 <input type="text" value="{{$data->gettranslation('title','en')}}" name="title[]" class="form-control" id="usr">
             </div>
             <div class="col-md-6">
                 <label for="usr">Name:AZ</label>
                 <input type="text"  value="{{$data->gettranslation('name','az')}}"   name="name[]" class="form-control" id="usr">
             </div>
             <div class="col-md-6">
                 <label for="usr">Name:EN</label>
                 <input type="text"  value="{{$data->gettranslation('name','en')}}" name="name[]" class="form-control" id="usr">
             </div>

             <div class="col-md-6">
                 <label for="usr">Slug:AZ</label>
                 <input type="text"  value="{{$data->gettranslation('slug','az')}}" name="slug[]" class="form-control" id="usr">
             </div>
             <div class="col-md-6">
                 <label for="usr">Slug:EN</label>
                 <input type="text  value="{{$data->gettranslation('slug','en')}}" name="slug[]" class="form-control" id="usr">
             </div>
             <div class="col-md-6">
                 <label for="usr">Text:AZ</label><br>
                 <textarea name="text[]"  value="" id="text" cols="50" rows="5" >{{$data->gettranslation('text','az')}}</textarea><br>
             </div>
             <div class="col-md-6">
                 <label for="usr">Text:EN</label><br>
                 <textarea name="text[]"  value="" id="text" cols="50" rows="5" >{{$data->gettranslation('text','en')}}</textarea>
             </div>
         </div>

     </div>
</div>
     <button class="btn btn-success" type="submit" class="btn btn-primary btn-block">Redaktə Et</button>
    </div>
    <br>


  </form>

</div>


{{--<script type="text/javascript">--}}
{{--    $('.delete_news_image').on('click', function(e){--}}
{{--        alert('You clicked the button!');--}}
{{--        e.preventDefault();--}}

{{--        const swalWithBootstrapButtons = Swal.mixin({--}}
{{--            customClass: {--}}
{{--                confirmButton: 'btn btn-success',--}}
{{--                cancelButton: 'btn btn-danger'--}}
{{--            },--}}
{{--            buttonsStyling: false,--}}
{{--        })--}}

{{--        swalWithBootstrapButtons.fire({--}}
{{--            title: 'Sil?',--}}
{{--            text: "tesdiq!",--}}
{{--            type: 'warning',--}}
{{--            showCancelButton: true,--}}
{{--            confirmButtonText: 'Sil',--}}
{{--            cancelButtonText: 'Xeyr, silme',--}}
{{--            reverseButtons: true--}}
{{--        }).then((result) => {--}}
{{--            if (result.value) {--}}



{{--                var btn = $(this);--}}
{{--                var link = btn.attr('href');--}}

{{--                $.ajax({--}}
{{--                    url : link,--}}
{{--                    success : function(data){--}}
{{--                        if(data=='ok'){--}}
{{--                            btn.closest('tr').remove();--}}

{{--                            swalWithBootstrapButtons.fire(--}}
{{--                                'Silindi!',--}}
{{--                                'Image ugurla silindi.',--}}
{{--                                'success'--}}
{{--                            )--}}

{{--                        }--}}
{{--                    },--}}
{{--                    error : function(e){--}}
{{--                        console.log(e);--}}
{{--                    }--}}
{{--                })--}}




{{--            } else if (--}}
{{--                // Read more about handling dismissals--}}
{{--                result.dismiss === Swal.DismissReason.cancel--}}
{{--            ) {--}}
{{--                swalWithBootstrapButtons.fire(--}}
{{--                    'Imtina',--}}
{{--                    'Silinmədi',--}}
{{--                    'error'--}}
{{--                )--}}
{{--            }--}}
{{--        });--}}


{{--    })--}}
{{--</script>--}}
{{--<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>--}}
{{--<script--}}
{{--    src="https://code.jquery.com/jquery-3.4.1.js"--}}
{{--    integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="--}}
{{--    crossorigin="anonymous"></script>--}}
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js"> </script>--}}
@endsection
