<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Http\Request;

class AdminController extends Controller
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
    public function index()
    {
        $businesses = Business::all();

        return view('admin.home',[
            'businesses' => $businesses
        ]);

    }

    public function show($slug)
    {

        $business = Business::with('categories')->where('slug', $slug)->first();

        if($business == null){
            return redirect('/admin');
        }

        return $business;

        return view('web.property',[
            'business' => $business
        ]);
    }
}
