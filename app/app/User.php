<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function messages()
    {
        //otro modelo (mensajes) tiene el id de usuario
        // return $this->hasMany(Message::class); RETORNA TODOS

        //RETORNA MSJS DESCENDENTE
        return $this->hasMany(Message::class)->orderBy('created_at','desc');
    }
}
