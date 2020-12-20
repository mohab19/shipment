<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
	use SoftDeletes;

    protected $fillable = ['title_ar', 'title_en', 'content_ar', 'content_en', 'type', 'value', 'image'];
}
