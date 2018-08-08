<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    //
    protected $fillable=[
    	'id','colonia','calle','estado','ciudad','numero','cp','user_id'
    ];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
