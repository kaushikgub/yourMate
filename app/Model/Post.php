<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    public function userName()
    {
        return $this->hasMany('App\Model\User','user_id','id');
    }

}
