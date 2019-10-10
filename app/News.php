<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\Exceptions\AttributeIsNotTranslatable;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    protected $table="news";
    protected $fillable=['title','name','slug','text'];
    public $timestamps=True;
//
    use HasTranslations;
//
    public $translatable = ['title','name','slug','text'];



    public function categories(){
        return $this->belongsToMany(Categories::class, 'pivots')
        			->withPivot('news_id', 'categories_id');
    }


	public function image(){
        return $this->hasMany('App\NewsImage','news_id','id');
	}


}
