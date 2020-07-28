<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact_image extends Model
{
    protected $table = 'contact_images';

    public $primarykey = 'id';

    public $timestamps = true;
}
