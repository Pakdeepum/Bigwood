<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class footer extends Model
{
    protected $table = 'footers';

    public $primarykey = 'id';

    public $timestamps = true;
}
