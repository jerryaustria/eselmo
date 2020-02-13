<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;



class apps_countries extends Model
{
    //

//    protected $table = 'apps_countries'; this can be use if the table is not the same as the class name
//    protected $primaryKey = 'postID'; define if the primary key is not id

    public function getActiveCountries()
    {
        $activeCountries = DB::select("SELECT distinct co.country_name, co.country_code FROM units un INNER JOIN apps_countries co on un.country_id = co.id");
        return $activeCountries;
//        return $this->hasMany('App\Unit','country_id');
    }

    Public function UserCountries(){
        return $this->hasOne('App\User','user_id');
    }
    

}
