<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Unit extends Model
{
    use SoftDeletes;
    protected $table='units';

    protected $fillable= [
        'user_id',
        'country_id',
        'Title',
        'Description',
        'Cities',
        'Address',
        'property_type',
        'property_features',
        'status',
        'beds',
        'baths',
        'area',
        'garages',
        'israting',
        'map_lat',
        'map_lon',
        'price',
        'photos',
    ];
    //
    public function getTheMaxAmount()
    {
        return DB::table('units')->max('price');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function photos(){
        return $this->morphMany('App\Photo', 'imageable_id');
    }
//    public function photos(){
//        return $this->hasMany('App\Photo', 'imageable_id');
//    }
    public function unitPhoto(){
        return $this->hasOne('App\Photo','imageable_id');
    }


//    February 18 2020
    public function unitPhotos(){
        return $this->hasMany('App\Photo','imageable_id');
    }


    public function tags(){
        return $this->morphToMany('App\Tag','taggable');
    }

    public function featured(){
        return $this->morphMany('App\FeaturedUnit', 'featured');
    }

    public function propertyType(){
        return $this->belongsTo('App\propertyTypeModel','property_type');
    }

    public function propertyStatus(){
        return $this->belongsTo('App\status', 'status');
    }



}
