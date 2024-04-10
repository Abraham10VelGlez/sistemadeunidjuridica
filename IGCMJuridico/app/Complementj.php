<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Complementj extends Model
{
    use Notifiable;
    //
    protected $fillable = [
        'idtbloficios','idoficio','route','fecha','idusers'
    ];
    
    /*DEFINICION DE LLAVE PRIMARYA*/
    protected $primaryKey = 'id';
}
