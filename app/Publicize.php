<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicize extends Model
{
    protected $table = 'publicizes';
    protected $primaryKey = 'publicizeID';
    public $timestamps = false;

    public function images()
        {
        	return $this->hasMany('App\Image', 'contentID', 'publicizeID');
        }

    public function scopeOfDataType ($query, $dataType)
        {
        	return $query->where('dataType', $dataType);

        }

    public function scopOfPublicizeID ($query, $publicizeID)
    	{
    		return $query->where('publicizeID', $publicizeID);
    	}

}
