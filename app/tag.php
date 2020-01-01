<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{

     //by mohamed this relationship between posts and catogrey aw tags
    public function posts(){              
        return $this->belongsToMany('App\post');
    }
}
