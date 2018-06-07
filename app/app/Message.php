<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


//Modelo de ORM Object Relational Mapper

class Message extends Model
{
    // Protege parámetros como
    // contraseñas Mass assigment exception
    protected $guarded = [];

// Relaciona msj con un usuairo
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
