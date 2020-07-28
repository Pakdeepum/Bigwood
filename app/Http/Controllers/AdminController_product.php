<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\product;
use App\product_type;

use DB;

class AdminController_product extends Controller
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

    /**Product admin */
    public function product_admin()
    {
        $products = product::orderBy('product_type','desc')->get();
        $types = product_type::all();

        return view('adminpages.product')->with('products', $products)->with('types',$types);;
    }

    public function product_admin_edit(Request $request, $id)
    {
        $where = array('id' => $id);
        $products  = product::where($where)->first();

        if(request('image_name')!=null){
            $request->validate([
                'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image_name->extension();  
    
            $request->image_name->move(public_path('images'), $imageName);

            $products->image_name = $imageName;
            $products->save();
        }
 
        $products->nameTH = request('nameTH');
        $products->nameEN = request('nameEN');
        $products->product_type = request('product_type');
        $products->save();

        return redirect()->back()
        ->with('success_product','You have successfully edit product.');
    }

    public function product_admin_store(Request $request)
    {
        $products = new product;

        if(request('image_name')!=null){
            $request->validate([
                'image_name' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
    
            $imageName = time().'.'.$request->image_name->extension();  
    
            $request->image_name->move(public_path('images'), $imageName);

            $products->image_name = $imageName;
        }
        
        $products->nameTH = request('nameTH');
        $products->nameEN = request('nameEN');
        $products->product_type = request('product_type');
        $products->save();

        return redirect()->back()
        ->with('success_product','You have successfully add product.');
    }

    public function product_admin_destroy($id)
    {
        $products_del = product::find($id);

        if ($products_del){
            $products_del->delete();
        }

        return redirect()->back()
        ->with('success_product','You have successfully delete product.');
    }
}
