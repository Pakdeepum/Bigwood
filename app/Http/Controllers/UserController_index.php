<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\slide_show;
use App\footer;
use App\homelinks;
use App\about_us;

use DB;

class UserController_index extends Controller
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

        /** about_us */
        $where = array('id' => '1');
        $aboutus  = about_us::where($where)->first();

        $where = array('id' => '2');
        $content2  = about_us::where($where)->first();

        $where = array('id' => '3');
        $content3  = about_us::where($where)->first();

        $where = array('id' => '4');
        $content4  = about_us::where($where)->first();

        /** homelinks */
        $where = array('id' => '1');
        $link1  = homelinks::where($where)->first();

        $where = array('id' => '2');
        $link2  = homelinks::where($where)->first();

        $where = array('id' => '3');
        $link3  = homelinks::where($where)->first();

        $where = array('id' => '4');
        $link4  = homelinks::where($where)->first();

        return view('userpages.index')->with('images1', $images1)->with('images2', $images2)->with('images3', $images3)->with('phonenum1',$phonenum1)
        ->with('phonenum2',$phonenum2)->with('phonenum3',$phonenum3)
        ->with('email',$email)->with('contact',$contact)->with('contact_link',$contact_link)->with('aboutus', $aboutus)->with('content2',$content2)
        ->with('content3',$content3)->with('content4',$content4)->with('link1',$link1)->with('link2',$link2)->with('link3',$link3)->with('link4',$link4);
    }
}
