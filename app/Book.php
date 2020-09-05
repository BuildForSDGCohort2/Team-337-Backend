<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = [
        'title', 'author', 'number_of_pages', 'type', 'level','description','thumbnail','isbn','price','url'
    ];
}
