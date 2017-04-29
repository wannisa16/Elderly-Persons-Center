<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
        protected $table = 'questions';
    protected $primaryKey = 'id';
    public $timestamps = false;

	public function questioners()
        {
        	return $this->hasMany('App\Questioner', 'questioner_id', 'id');
        }
}
