<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\product;
use App\product_type;

use App\slide_show;
use App\footer;

use DB;

class UserController_product extends Controller
{

    /** Home user */
    public function index($id)
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

        $where = array('id' => '7');
        $ship1  = footer::where($where)->first();

        $where = array('id' => '8');
        $ship2  = footer::where($where)->first();

        /** types */
        $where = array('id' => $id);
        $types  = product_type::where($where)->first();

        $typesname = $types->nameTH;

        $where = array('product_type' => $typesname);
        $products  = product::where($where)->orderby('id','asc')->get();

        return view('userpages.product')->with('images1', $images1)->with('images2', $images2)->with('images3', $images3)->with('phonenum1',$phonenum1)
        ->with('phonenum2',$phonenum2)->with('phonenum3',$phonenum3)->with('email',$email)->with('contact',$contact)->with('contact_link',$contact_link)
        ->with('ship1',$ship1)->with('ship2',$ship2)
        ->with('types', $types)->with('products', $products);
    }
}
