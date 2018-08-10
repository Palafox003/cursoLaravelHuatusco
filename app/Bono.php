<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bono extends Model
{
    //
    protected $fillable=[
    	'nombre','monto'
    ];

    public function users(){
    	return $this->belongsToMany('App\User');
    }
}
