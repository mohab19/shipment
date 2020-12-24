<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PricingCity extends Model
{
	use SoftDeletes;

    protected $fillable = ['city_from', 'city_to', 'price'];

	public function City_to()
    {
        return $this->belongsTo('App\Pricing', 'city_to', 'id');
    }

	public function City_from()
    {
        return $this->belongsTo('App\Pricing', 'city_from', 'id');
    }
}
