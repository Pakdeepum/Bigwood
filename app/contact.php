<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contacts';

    public $primarykey = 'contact_id';

    public $timestamps = true;
}
