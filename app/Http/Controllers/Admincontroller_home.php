<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\homelinks;
use App\about_us;

use DB;

class AdminController_home extends Controller
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
    public function home_admin()
    {
        /** about_us admin */
        $where = array('id' => '1');
        $aboutus  = about_us::where($where)->first();

        $where = array('id' => '2');
        $content2  = about_us::where($where)->first();

        $where = array('id' => '3');
        $content3  = about_us::where($where)->first();

        $where = array('id' => '4');
        $content4  = about_us::where($where)->first();

        /** homelinks admin */
        $where = array('id' => '1');
        $link1  = homelinks::where($where)->first();

        $where = array('id' => '2');
        $link2  = homelinks::where($where)->first();

        $where = array('id' => '3');
        $link3  = homelinks::where($where)->first();

        $where = array('id' => '4');
        $link4  = homelinks::where($where)->first();

        return view('adminpages.home')->with('aboutus', $aboutus)->with('content2',$content2)->with('content3',$content3)
        ->with('content4',$content4)->with('link1',$link1)->with('link2',$link2)->with('link3',$link3)->with('link4',$link4);
    }

    public function home_admin_edit_aboutus(Request $request , $id)
    {
        $where = array('id' => $id);
        $aboutus  = about_us::where($where)->first();

        if(request('image_name')!=null){
            $request->validate([
                'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image_name->extension();  
    
            $request->image_name->move(public_path('images'), $imageName);

            $aboutus->image_name = $imageName;
        }

        $aboutus->textTH = request('textTH');
        $aboutus->textEN = request('textEN');
        $aboutus->save();

        if($id == '1'){
            return redirect()->back()
            ->with('success_ab','You have successfully edit content.');
        }

        if($id == '2'){
            return redirect()->back()
            ->with('success_c2','You have successfully edit content.');
        }
    }

    public function home_admin_edit_homelink(Request $request , $id)
    {
        $where = array('id' => $id);
        $homelink  = homelinks::where($where)->first();

        if(request('image_name')!=null){
            $request->validate([
                'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image_name->extension();  
    
            $request->image_name->move(public_path('images'), $imageName);

            $homelink->image_name = $imageName;
        }

        $homelink->name = request('name');
        $homelink->link = request('link');
        $homelink->save();

        if($id == '1'){
            return redirect()->back()
            ->with('success_h1','You have successfully edit content.');
        }

        if($id == '2'){
            return redirect()->back()
            ->with('success_h2','You have successfully edit content.');
        }

        if($id == '3'){
            return redirect()->back()
            ->with('success_h3','You have successfully edit content.');
        }

        if($id == '4'){
            return redirect()->back()
            ->with('success_h4','You have successfully edit content.');
        }
    }
}
