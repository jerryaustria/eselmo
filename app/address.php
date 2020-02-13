<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    //

    protected $table='addresses';

    protected $fillable =[
        'user_id',
        'address',
        'zipcode',
        'country_id',
        'city_id',
        'barangay'

    ];
}
