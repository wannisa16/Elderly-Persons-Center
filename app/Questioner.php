<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questioner extends Model
{
    protected $table = 'questioners';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function question()
       {
       	return $this->hasMany('App\Question', 'questioner_id', 'id');
       }

    public function comment()
       {
        return $this->belongsTo('App\Comment');
       }
}
