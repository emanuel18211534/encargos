<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';

    protected $primaryKey='id_prod';

    public $incrementing=false;

    // desactiva las etiquetas de tiempo.
    public $timestamps=false;


    protected $fillable=[
    	'id_prod',
    	'nombre',
    	'descripcion',
    	'activo',
    	'foto',
    	
    ];
}
