<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\product;
use App\product_type;

use App\slide_show;
use App\footer;
use App\shipping_detail;

use DB;

class UserController_product_type extends Controller
{

    /** Home user */
    public function index()
    {   
        /** footer & slide */
        $where = array('id' => '1');
        $phonenum1  = footer::where($where)->first();
        $images1 = slide_show::where($where)->first();

        $where = array('id' => '2');
        $phonenum2  = footer::where($where)->first();
        $images2 = slide_show::where($where)->first();

        $where = array('id' => '3');
        $phonenum3  = footer::where($where)->first();
        $images3 = slide_show::where($where)->first();

        $where = array('id' => '4');
        $email  = footer::where($where)->first();

        $where = array('id' => '5');
        $contact  = footer::where($where)->first();

        $where = array('id' => '6');
        $contact_link  = footer::where($where)->first();

        $where = array('id' => '1');
        $ship1  = shipping_detail::where($where)->first();

        $where = array('id' => '2');
        $ship2  = shipping_detail::where($where)->first();

        /** types */
        $types = product_type::orderBy('id','asc')->get();

        return view('userpages.product_type')->with('images1', $images1)->with('images2', $images2)->with('images3', $images3)->with('phonenum1',$phonenum1)
        ->with('phonenum2',$phonenum2)->with('phonenum3',$phonenum3)->with('email',$email)->with('contact',$contact)->with('contact_link',$contact_link)
        ->with('ship1',$ship1)->with('ship2',$ship2)
        ->with('types', $types);
    }
}
