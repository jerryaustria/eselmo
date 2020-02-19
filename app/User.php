<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;


class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','password', 'Account_type' , 'Agency_id','country_id','role_id', 'is_active', 'photo_id','phone',
        'skype','twitter','facebook','instagram','about_me',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

//    public function Unitphotos(){
//       return $this->hasMany('App\Photo', 'imageable_id');
//    }

    public function properties(){
        return $this->hasMany('App\Unit');
    }


    public function userAddress(){
        return $this->hasOne('App\Address');
    }

    public function role(){ // use for read
        return $this->belongsTo('App\Role','role_id');
    }

    public function userPhoto(){
        return $this->belongsTo('App\Photo','photo_id');
    }



    public function checkAccountPlan(){
        if($this->role->name == 'Administrator' && $this->is_active == 1){
            return true;
        }else{
            return false;
        }
    }


}
