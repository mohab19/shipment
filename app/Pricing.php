<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
	use SoftDeletes;

    protected $fillable = ['city_ar', 'city_en', 'price', 'note_ar', 'note_en'];

	public function PricingCities()
    {
        return $this->hasMany('App\PricingCity', 'city_from');
    }
}
