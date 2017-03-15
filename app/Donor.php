<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $table = 'donors';
    protected $primaryKey = 'id';
    public $timestamps = false;

}
