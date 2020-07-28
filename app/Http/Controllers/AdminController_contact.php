<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\contact;
use App\contact_image;

use DB;

class AdminController_contact extends Controller
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

    /** Home admin */
    public function contact_admin()
    {
        /** about_us admin */
        $where = array('id' => '1');
        $contacts  = contact::where($where)->first();

        $where = array('id' => '1');
        $contact_pics  = contact_image::where($where)->first();

        return view('adminpages.contact')->with('contacts', $contacts)->with('contact_pics', $contact_pics);
    }

    public function contact_admin_edit_pic(Request $request , $id)
    {
        $where = array('id' => $id);
        $contact_pics  = contact_image::where($where)->first();

        if(request('image_name')!=null){
            $request->validate([
                'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image_name->extension();  
    
            $request->image_name->move(public_path('images'), $imageName);

            $contact_pics->image_name = $imageName;
        }

        $contact_pics->save();

        if($id == '1'){
            return redirect()->back()
            ->with('success_cp','You have successfully edit content.');
        }
    }

    public function contact_admin_edit(Request $request , $id)
    {
        $where = array('id' => $id);
        $contacts  = contact::where($where)->first();

        $contacts->address = request('address');
        $contacts->phone = request('phone');
        $contacts->line = request('line');
        $contacts->email = request('email');

        $contacts->save();

        return redirect()->back()
            ->with('success_c','You have successfully change contact.');
    }
}
