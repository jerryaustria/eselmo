<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $uploads = '/images/';

    protected $fillable =[
        'path','imageable_id','imageable_type',
        ];

    public function imageable()
    {
        return $this->morphTo();
    }

    public function getPathAttribute($photo){
        return $this->uploads . $photo;

    }
}
