<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class rating extends Model
{
    //
    protected $fillable=[
        'user_id',
        'unit_id',
        'rate',
    ];


    public function unitRate(){
        return $this->belongsTo('App\Unit','unit_id');
    }

    public function getOverAllRating($unitID){

        return DB::select("SELECT (SUM(multiply)/ SUM(count)) as percentage FROM (SELECT rate, COUNT(rate) as count, rate * COUNT(rate) as multiply  FROM ratings WHERE unit_id =". $unitID . " GROUP BY rate) as overAllRating");

    }

}
