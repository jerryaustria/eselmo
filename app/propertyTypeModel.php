<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propertyTypeModel extends Model
{
    //
    protected $table='property_type_models';
    protected $fillable=[
        'name', 'photo',
    ];

}
