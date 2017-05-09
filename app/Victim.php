<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Victim extends Model
{
    protected $table = 'victims';
    protected $primaryKey = 'victim_id';
    public $timestamps = false;
		
	public function helper()
        {
        	return $this->belongsTo('App\Helper','helper_id');
        }

}
