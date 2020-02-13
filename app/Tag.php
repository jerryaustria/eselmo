<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    public function unit_posts(){
        return $this->morphedByMany('App\Unit', 'taggable');
    }

    public function videos(){
        return $this->morphedByMany('App\Video', 'taggable');
    }
}
