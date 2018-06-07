<?php

namespace App;
use App\Hotel;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
	
    //  Mass assigment exception
    protected $guarded = [];
    // Relaciona msj con un usuairo
    public function hotel()
    {
    	return $this->belongsTo(Hotel::class);
    }
}
