<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Elderly extends Model
{
    protected $table = 'elderlies';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function getAgeAttribute()
	{
    	return Carbon::parse($this->attributes['brithday'])->age;
	}
}
