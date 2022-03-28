<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
use App\Models\State;
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

    public function add()
    {
        $categories = Category::orderBy('title', 'ASC')->get();
        $states = State::orderBy('name', 'ASC')->get();

        return view('admin.create', [
            'categories' => $categories,
            'states' => $states
        ]);
    }

    public function store(Request $request)
    {

        $createBusiness = Business::create($request->all());
        $createBusiness->setSlug();
        $createBusiness->categories()->attach($request->category);
        return redirect()->route('admin.home');

    }
}
