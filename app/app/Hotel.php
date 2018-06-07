<?php

namespace App;
use App\Room;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    //

    //  Mass assigment exception
    protected $guarded = [];

// Relaciona msj con un usuairo
    public function  city()
    {
    	return $this->belongsTo(City::class);
    }



    public function rooms()
    {
        //otro modelo (mensajes) tiene el id de usuario
        // return $this->hasMany(Message::class); RETORNA TODOS

        //RETORNA MSJS DESCENDENTE
        return $this->hasMany(Room::class)->orderBy('created_at','desc');
    }
}
