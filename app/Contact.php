<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    public $timestamps = false;

    public function scopeOfTitle ($query, $title)
        {
        	return $query->where('title', $title);

        }

}
