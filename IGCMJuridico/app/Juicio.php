<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Juicio extends Model
{
    use Notifiable;
    //
    protected $fillable = [
        "expediente","quejoso","nojuicio","asunto","paradigido","cargo","fechanex","fechalimit","emitidopor","scan","idusers","status",
    ];
    
    /*DEFINICION DE LLAVE PRIMARYA*/
    protected $primaryKey = 'id';
}
