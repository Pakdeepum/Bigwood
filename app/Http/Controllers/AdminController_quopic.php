<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\quotation;
use App\quotation_images;

use DB;

class AdminController_quopic extends Controller
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
    public function quopic_admin()
    {
        /** about_us admin */
        $where = array('id' => '1');
        $quopics  = quotation_images::where($where)->first();

        return view('adminpages.quopic')->with('quopics', $quopics);
    }

    public function quopic_admin_edit(Request $request , $id)
    {
        $where = array('id' => $id);
        $aboutus  = quotation_images::where($where)->first();

        if(request('image_name')!=null){
            $request->validate([
                'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image_name->extension();  
    
            $request->image_name->move(public_path('images'), $imageName);

            $aboutus->image_name = $imageName;
        }

        $aboutus->save();

        if($id == '1'){
            return redirect()->back()
            ->with('success_qp','You have successfully edit content.');
        }
    }
}
