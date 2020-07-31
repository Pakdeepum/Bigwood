<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\contact;
use Session;
use App\contact_image;

use DB;

class languageController extends Controller
{
    /** lang */
    public function thai()
    {
        Session::put('language','thai');

        return redirect()->back();
    }

    public function eng()
    {
        Session::put('language','eng');

        return redirect()->back();
    }
}
