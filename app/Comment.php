<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //

        protected $fillable = [

            'unit_id',
            'author',
            'email',
            'body',
            'is_active'
        ];


    public function replies(){
        return $this->hasMany('App\CommentReply','comment_id');
    }

    public function user(){
        return $this->belongsTo('App\User','author');
    }



}
