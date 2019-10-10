<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function locale(Request $request)
    {

        Session::put(['locale' => $request->local]);
        App::setLocale(Session::get('locale'));
    }

    public function get_index()
    {
        $categories=Categories::all();
        return view('backend.index',compact('categories'));
    }
    public function categories_get()
    {
        return view('backend.get.insert');
    }
    public function categories_save(Request $request)
    {
        unset($request['_token']);
        $save=$request->all();
        Categories::insert($save);
        return redirect()->route('admin.index');

    }
    public  function update($id)
    {
        $data=Categories::find($id);
        return view('backend.get.update',compact('data'));
    }
    public function save(Request $request, $id)
    {
        unset($request['_token']);
        $save=Categories::where('id',$id)->update($request->all());
        return redirect()->route('admin.index');
    }
    public function delete($id)
    {
        $sil=Categories::find($id);
        $sil->delete();
        return redirect()->route('admin.index');
    }
}
