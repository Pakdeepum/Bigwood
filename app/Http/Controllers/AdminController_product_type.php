<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\product;
use App\product_type;

use DB;

class AdminController_product_type extends Controller
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

    /**Product type admin */
    public function product_type_admin()
    {
        $types = product_type::orderBy('id','desc')->get();

        return view('adminpages.protype')->with('types', $types);
    }

    public function product_type_admin_edit(Request $request, $id)
    {
        $where = array('id' => $id);
        $types  = product_type::where($where)->first();

        if(request('image_name')!=null){
            $request->validate([
                'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image_name->extension();  
    
            $request->image_name->move(public_path('images'), $imageName);

            $types->image_name = $imageName;
            $types->save();
        }
 
        $types->nameTH = request('nameTH');
        $types->nameEN = request('nameEN');
        $types->save();

        return redirect()->back()
        ->with('success_type','You have successfully edit product.');
    }

    public function product_type_admin_store(Request $request)
    {
        $types = new product_type;

        if(request('image_name')!=null){
            $request->validate([
                'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image_name->extension();  
    
            $request->image_name->move(public_path('images'), $imageName);

            $types->image_name = $imageName;
        }
        
        $types->nameTH = request('nameTH');
        $types->nameEN = request('nameEN');
        $types->save();

        return redirect()->back()
        ->with('success_type','You have successfully add product.');
    }

    public function product_type_admin_destroy($id)
    {
        $types_del = product_type::find($id);

        if ($types_del){
            $types_del->delete();
        }

        return redirect()->back()
        ->with('success_type','You have successfully delete product.');
    }
}
