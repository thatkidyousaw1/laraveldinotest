<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    protected $table = 'heroes';

    public $primaryKey = 'id';

    public $timestamps = true;

}
