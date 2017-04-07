<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Victim extends Model
{
        protected $table = 'victims';
    protected $primaryKey = 'id';
    public $timestamps = false;
		
	public function helpers()
        {
        	return $this->hasMany('App\Helper', 'helperID', 'id');
        }

}
