<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\News;
use App\Pivot;

class FrontController extends Controller
{
	 public function index()
    {
    $categories=Categories::all();
    return view('front.index',compact('categories'));

    }


    public function news($id)
    {
    	$pivot = Pivot::where('categories_id',$id)->get();

    	foreach ($pivot as $val) {
    		$news_ids[] = $val->news_id;
    	}
    	
    	$news = News::whereIn('id',$news_ids)->get();

    	return view('front.news',compact('news'));
    }
}
