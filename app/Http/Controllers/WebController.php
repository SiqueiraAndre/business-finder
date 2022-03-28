<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class WebController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {

        $head = '';

        return view('web.home',[
            'head' => $head,
        ]);
    }


    public function show($slug)
    {

        $business = Business::with('categories')->where('slug', $slug)->first();

        if($business == null){
            return redirect('/');
        }

        return view('web.property',[
            'business' => $business
        ]);
    }

    public function search(Request $request)
    {

        // Get the search value from the request
        $search = $request->input('q');

        $businesses = Business::with('categories')->where('title', 'LIKE', '%'.$search.'%')
            ->orWhere('telephone', 'LIKE', '%'.$search.'%')
            ->orWhere('zipcode', 'LIKE', '%'.$search.'%')
            ->orWhere('city', 'LIKE', '%'.$search.'%')
        //    ->orWhere('title','LIKE', '%'.$search.'%')
         //   ->orWhereBelongsTo('categories ', '%'.$search.'%')
            ->paginate(10);

//        return ($business) ;
        return view('web.filter',[
            'businesses' => $businesses,
            'search' => $search
        ]);
    }

}
