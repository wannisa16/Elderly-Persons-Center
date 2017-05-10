<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Victim extends Model
{
    protected $table = 'victims';
    protected $primaryKey = 'victim_id';
    public $timestamps = false;
		
	public function helper()
    {
        return $this->belongsTo('App\Helper','helper_id');
    }

    public function getAgeAttribute()
	{
    	return Carbon::parse($this->attributes['v_birthday'])->age;
	}



}
