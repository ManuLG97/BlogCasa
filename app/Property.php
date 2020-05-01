<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable=['description','price','type','user_id','fotocasa'];

    public function user(){
        return $this->belongsTo('App\User','owner_id');
    }
}
