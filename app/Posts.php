<?php

namespace Sipi;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = [
        'short', 'long', 'categoria', 'content', 'autor', 'img',
    ];
}
