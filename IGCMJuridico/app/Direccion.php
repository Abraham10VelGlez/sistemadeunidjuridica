<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Direccion extends Model
{
    use Notifiable;
    //
    protected $fillable = [
        'id_oficios', 'juzgados', 'direcciones', 'lng', 'lat'
    ];
    
    /*DEFINICION DE LLAVE PRIMARYA*/
    protected $primaryKey = 'id';
}
