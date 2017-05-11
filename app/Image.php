<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';
    protected $primaryKey = 'imageID';
    public $timestamps = false;



    public function publicize()
        {
        	return $this->belongsTo('App\publicizes');
        }   

    public function scopeOfImage ($query, $publicizeID)
    	{
    		return $query->where('contentID', $publicizeID); 
    	}
}
