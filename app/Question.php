<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $table = 'helpers';
    protected $primaryKey = 'helper_id';
    public $timestamps = false;

	public function questioners()
        {
        	return $this->hasMany('App\Questioner', 'questioner_id', 'id');
        }

}
