<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect,Response;
use App\quotation;
use App\quotation_images;

use DB;

class AdminController_massage extends Controller
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
    public function massage_admin()
    {
        $quotations = quotation::orderBy('created_at','desc')->get();

        return view('adminpages.massage')->with('quotations', $quotations);
    }

    public function massage_admin_view($id)
    {
        $quotations = quotation::find($id);
        
        $quotations->status = '1';
        $quotations->save();

        return redirect()->back();
    }

    public function massage_admin_store(Request $request)
    {
        $quotations = new quotation;
        
        $quotations->email = request('email');
        $quotations->phone = request('phone');
        $quotations->detail = request('detail');
        $quotations->save();

        return redirect()->back()
        ->with('success_mas','Your quatation has been sent.');
    }

    public function massage_admin_destroy($id)
    {
        $quotations = quotation::find($id);

        if ($quotations){
            $quotations->delete();
        }

        return redirect()->back()
        ->with('success_mas','You have successfully delete massage.');
    }
}
