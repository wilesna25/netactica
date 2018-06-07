<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    

    public function hotels()
    {
        //otro modelo (mensajes) tiene el id de usuario
        // return $this->hasMany(Message::class); RETORNA TODOS

        //RETORNA MSJS DESCENDENTE
        return $this->hasMany(Hotel::class)->orderBy('created_at','desc');
    }
}
