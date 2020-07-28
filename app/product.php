<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'products';

    public $primarykey = 'id';

    public $timestamps = true;
}
