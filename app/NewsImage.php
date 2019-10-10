<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsImage extends Model
{
    protected $table='images_news';
    protected $fillable=['images','news_id'];


    public function images(){
        return $this->belongsTo(News::class, 'id');

    }
}

