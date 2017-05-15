<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
        protected $table = 'comments';
    protected $primaryKey = 'id';
    public $timestamps = false;

	public function questioners()
        {
        	return $this->belongsTo('App\Questioner');
        }

        public function scopeOfComment ($query, $id)
        {
        	return $query->where('questioner_id', $id);

        }
}