<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Helper extends Model
{
    protected $table = 'helpers';
    protected $primaryKey = 'helper_id';
    public $timestamps = false;
}
