<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    //
    protected $fillable=[
    	'nombre','modelo','img','descripcion','marca_id'
    ];
}
