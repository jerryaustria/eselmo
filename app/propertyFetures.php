<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class propertyFetures extends Model
{
    //
    protected $table = 'property_fetures';
    public function get_property_features($user_id)
    {

//        $activeFeatures = DB::select("SELECT * FROM property_fetures WHERE created_by = 0 OR created_by = '{$user_id}'");
//        return $activeFeatures;

    }
}
