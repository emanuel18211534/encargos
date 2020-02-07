<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table='usuarios';

    protected $primaryKey='email';

    public $incrementing=false;

    protected $with=['rol'];
    // desactiva las etiquetas de tiempo.
    public $timestamps=false;

    protected $fillable=[
    	'email',
    	'usuario',
    	'password',
    	'nombre',
    	'appaterno',
    	'apmaterno',
    	'edad',
    	'direccion',
    	'id_rol',
    ];

    public function rol(){
    	return $this->belongsTo(Rol::class,'id_rol','id_rol');
    }
}
