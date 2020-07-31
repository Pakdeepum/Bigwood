<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class shipping_detail extends Model
{
    protected $table = 'shipping_details';

    public $primarykey = 'id';

    public $timestamps = true;
}
