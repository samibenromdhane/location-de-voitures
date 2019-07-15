<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;
use App\Customer;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    protected $fillable = [
        'name','car_id'	,'customer_id', 'date_out', 'date_in', 'days', 'statut'
    ];
    public function car()
	{
       return $this->hasOne('App\Car','id','car_id');
  	}
  	public function customer()
  	{
  		return $this->hasOne('App\Customer','id','customer_id');
  	}
  	use SoftDeletes;
}
