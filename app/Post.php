<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //加入白名單
    protected $fillable = ['title','content'];
}
