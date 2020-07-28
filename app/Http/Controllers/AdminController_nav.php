<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\slide_show;
use App\footer;

use DB;

class AdminController_nav extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    /**Nav admin */
    public function nav_admin()
    {
        /** Slide show */
        $images  = slide_show::orderBy('id','desc')->get();;

        /** phonenum */
        $where = array('id' => '1');
        $phonenum1  = footer::where($where)->first();

        $where = array('id' => '2');
        $phonenum2  = footer::where($where)->first();

        $where = array('id' => '3');
        $phonenum3  = footer::where($where)->first();

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

        return view('adminpages.nav')->with('images', $images)
        ->with('phonenum1',$phonenum1)->with('phonenum2',$phonenum2)->with('phonenum3',$phonenum3)->with('email',$email)
        ->with('contact',$contact)->with('contact_link',$contact_link)->with('ship1',$ship1)->with('ship2',$ship2);
    }

    public function nav_admin_edit_slide(Request $request , $id)
    {

        $where = array('id' => $id);
        $images  = slide_show::where($where)->first();

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:8192',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images'), $imageName);

        $images->image_name = $imageName;

        $images->save();

        return redirect()->back()
            ->with('success','You have successfully upload image.');
    }

    public function nav_admin_edit_footer(Request $request)
    {
        $where = array('id' => '1');
        $phonenum1  = footer::where($where)->first();

        $where = array('id' => '2');
        $phonenum2  = footer::where($where)->first();

        $where = array('id' => '3');
        $phonenum3  = footer::where($where)->first();

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


        $phonenum1->value = request('phonenum1');
        $phonenum2->value = request('phonenum2');
        $phonenum3->value = request('phonenum3');
        $email->value = request('email');
        $contact->value = request('contact');
        $contact_link->value = request('contact_link');
        $ship1->value = request('ship1');
        $ship2->value = request('ship2');

        $phonenum1->save();
        $phonenum2->save();
        $phonenum3->save();
        $email->save();
        $contact->save();
        $contact_link->save();
        $ship1->save();
        $ship2->save();

        return redirect()->back()
            ->with('success_footer','You have successfully change contact.');
    }
}
