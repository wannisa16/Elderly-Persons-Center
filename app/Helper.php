<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    protected $table = 'helpers';
    protected $primaryKey = 'helper_id';
    public $timestamps = false;

	public function victim()
        {
        	return $this->hasMany('App\victim', 'victim_id', 'helperID');
        }
    }