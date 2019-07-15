<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Photo extends Model
{
    protected $fillable = [
        'car_id', 'name'
    ];

    public function car()
    {
    	return $this->hasOne('App\Car','id','car_id');
    }
}
