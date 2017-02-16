<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Elderly extends Model
{
    protected $table = 'elderlies';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
