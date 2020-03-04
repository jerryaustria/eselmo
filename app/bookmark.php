<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bookmark extends Model
{
    //
    protected $fillable= [
        'unit_id',
        'user_id'
        ];


    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function unit(){
        return $this->belongsTo('App\Unit','unit_id');
    }

}
