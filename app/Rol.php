<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table='roles';

    protected $primaryKey='id_rol';

    public $incrementing=false;

    // desactiva las etiquetas de tiempo.
    public $timestamps=false;



    protected $fillable=[
    	'id_rol',
    	'rol',
    	
    ];
}
