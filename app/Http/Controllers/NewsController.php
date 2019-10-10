<?php

namespace App\Http\Controllers;
use App\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Image\Image;
use Validator,Redirect,Response,File;
use App\Categories;
use App\News;
use App\NewsImage;


use Illuminate\Support\Facades\Input;

class NewsController extends Controller
{

    public function post_index()
    {
        $news = News::all();
        return view('backend.post.index',compact('news'));
    }



    public function news_insert()
    {
        $news = Categories::all();
        return view('backend.post.insert', compact('news'));
    }





    public function news_save(Request $request){
        $locale = Lang::all();

        $keys=$locale;

        $title = $request->title;

        $array2 = [];
        foreach ($locale as $lockey => $local) {
            array_push($array2,$local->lang);
        };
        $keys = array_values($array2);
        $title = array_combine($keys, array_values($request->title));
        $name = array_combine($keys, array_values($request->name));
        $slug = array_combine($keys, array_values($request->slug));
        $text = array_combine($keys, array_values($request->text));
        $news = new News();
        $news->title = $title;
        $news->name = $name;
        $news->slug = $slug;
        $news->text=$text;
        $news->save();
        $news->categories()->attach($request['category_ids']);

        if($request->hasFile('img')) {
            $fileNameToDb = '';
            $i=1;
            foreach ($request->img as $file) {
                $fileNameWithExt = $file->getClientOriginalName();
                $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
                $ext = $file->getClientOriginalExtension();
                $fileNameToStore =time().$i++. "." . $ext;

                Image::load($file)->save('image/'.$fileNameToStore);
                $newsImg = new NewsImage();
                $newsImg->images = $fileNameToStore;
                $newsImg->news_id = $news->id;
                $newsImg->save();
            }

            return redirect()->route('post.index');
        }


    }

    public function news_edit($id)
    {
        $data=News::find($id);
        return view('backend.post.edit',compact('data'));
    }

public function news_edit_save(Request $request,$id)
{
    $locale = Lang::all();
    $news=News::find($id);

    $keys=$locale;

    $title = $request->title;

    $array2 = [];
    foreach ($locale as $lockey => $local) {
        array_push($array2,$local->lang);
    };
    $keys = array_values($array2);
    $title = array_combine($keys, array_values($request->title));
    $name = array_combine($keys, array_values($request->name));
    $slug = array_combine($keys, array_values($request->slug));
    $text = array_combine($keys, array_values($request->text));
    $news->title = $title;
    $news->name = $name;
    $news->slug = $slug;
    $news->text=$text;
    $news->save();




    if($request->hasFile('img')) {
        $fileNameToDb = '';
        $i = 1;
        foreach ($request->img as $file) {

            $fileNameWithExt = $file->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $file->getClientOriginalExtension();
            $fileNameToStore = time() . $i++ . "." . $ext;
            Image::load($file)->save('image/' . $fileNameToStore);
            $newsImg = new NewsImage();
            $newsImg->images = $fileNameToStore;
            $newsImg->news_id = $news->id;

            $newsImg->save();
        }
    }
        return redirect()->route('post.index');
    }









    public function delete($id)
    {
        $sil = News::find($id);

        $sil->categories()->detach();
        $images = $sil->image;
        foreach ($images as $val) {
            $path = public_path() . "/image/".$val->images;
            if (is_file($path)) {
                unlink($path);

            }

            }
        $sil->delete();
            return redirect()->route('post.index');

        }




    /////////news image delete ///
    public function delete_image($id)
    {
        $image=NewsImage::find($id);
        $path = public_path() . "/image/" . $image->images;
        if (is_file($path)) {
            unlink($path);
            $image->delete();
        }
        return redirect("/admin/news/edit/".$image->news_id);


///    return redirect("/admin/post");


    }



    public function change_status($id){
        $news = News::find($id);
        $news->status = !$news->status;
        $news->save();

        return 'ok';
    }

}

