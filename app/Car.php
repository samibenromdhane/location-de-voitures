<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Brand;
use App\Photo;

class Car extends Model
{
  protected $fillable =
  [
        'brand_id', 'name', 'color', 'fuel', 'places', 'kilometrage', 'power', 'price', 'matricule', 'statut', 'comments'
  ];

  public function brand()
	{
       return $this->hasOne('App\Brand','id','brand_id');
  }

  public function photos()
	{
       return $this->hasMany('App\Photo','car_id','id');
  }

  public function bookings()
  {
      return $this->hasMany('App\Booking', 'car_id','id');
  }

  	use SoftDeletes;
}
