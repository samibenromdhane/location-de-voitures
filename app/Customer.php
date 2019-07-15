<?php

namespace App;

use App\Booking;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'fullname','phone' ,'email'
    ];

    public function bookings()
    {
    	return $this->hasMany('App\Booking','customer_id','id');
    }
}
