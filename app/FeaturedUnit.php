<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeaturedUnit extends Model
{
    //
    protected  $fillable=[
        'user_id', 'unit_id'
    ];


    public function featured()
    {
        return $this->morphTo();
    }



}
