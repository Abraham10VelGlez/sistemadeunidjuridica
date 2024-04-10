<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Oficio extends Model
{
    use Notifiable;
    //
    protected $fillable = [
        'oficio','oficiopartdos','xhorto','xhortopartdos','tipodocumento' ,'asunto','paradigido','cargo','fechanex','emitidopor','motivossol','numerales','fechalimit','scanoffice','idusers','status',
    ];
   
    /*DEFINICION DE LLAVE PRIMARYA*/
    protected $primaryKey = 'id';
}
