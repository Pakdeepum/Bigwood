<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class quotation extends Model
{
    protected $table = 'quotations';

    public $primarykey = 'id';

    public $timestamps = true;
}
