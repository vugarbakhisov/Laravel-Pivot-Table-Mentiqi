<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\Exceptions\AttributeIsNotTranslatable;

class News_lang extends Model
{
    use HasTranslations;

    public $translatable = ['title'];
    public $translatable = ['name'];
    public $translatable = ['slug'];
    public $translatable = ['text'];

}
