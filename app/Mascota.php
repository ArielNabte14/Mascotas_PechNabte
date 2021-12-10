<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    protected $table='mascotas';
    protected $primaryKey='id_mascota';

    //Especificamos las relaciones
    public $with=['especie'];
 
    //define si la llave primaria es o no un numero incrementable 
    public $incrementing=true;

    //activar o desactivar etiquetas de tiempo
    public $timestamps=true;

    public $fillable=[
        'id_mascota',
        'edad',
        'peso',
        'genero',
        'id_propetario',
        'id_especie',
        ];

        public function especie()
        {
            return $this->belongsTo(Especie::class,'id_especie','id_especie');
        }
}
