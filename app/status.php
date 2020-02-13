<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    //
    protected $table = 'status';
    protected $fillable=[
        'name',
    ];
}
