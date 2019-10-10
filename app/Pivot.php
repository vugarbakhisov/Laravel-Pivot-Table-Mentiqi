<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pivot extends Model
{
    protected $table = 'pivots';
    protected $fillable=['categories_id','news_id'];

}
