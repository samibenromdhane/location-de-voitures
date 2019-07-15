<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;

class Brand extends Model
{
    protected $fillable = [
        'name'
    ];

    public function cars()
	{
       return $this->hasMany('App\Car','brand_id','id');
  	}
}
