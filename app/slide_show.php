<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide_show extends Model
{
    protected $table = 'slide_shows';

    public $primarykey = 'id';

    public $timestamps = true;
}
