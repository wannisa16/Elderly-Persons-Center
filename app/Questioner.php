<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questioners extends Model
{
    protected $table = 'questioners';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
