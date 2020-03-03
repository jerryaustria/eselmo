<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use Cviebrock\EloquentSluggable\Sluggable;

use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

use Cohensive\Embed\Facades\Embed;

class Unit extends Model
{
    use SoftDeletes;
    use Sluggable;
    use SluggableScopeHelpers;

    protected $table='units';

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'Title'
            ]
        ];
    }

    protected $fillable= [
        'user_id',
        'hash_id',
        'country_id',
        'Title',
        'Description',
        'city',
        'zipcode',
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
        'location_map',
        'price',
        'remark',
        'video',
        'allow_comment'
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

    public function getVideoHtmlAttribute(){
        $embed = Embed::make($this->video)->parseUrl();

        if(!$embed)
            return '';

        $embed->setAttribute(['width'=>400]);
        return $embed->getHtml();
    }

    public function comments(){
        return $this->hasMany('App\Unit');
    }



}
