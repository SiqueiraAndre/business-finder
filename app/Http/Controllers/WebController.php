<?php

namespace App\Http\Controllers;

use App\Models\Business;
use App\Models\Category;
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

        $search = $request->input('q');

        $category = Category::select('business_id as id')
            ->where('title', 'LIKE', '%'.$search.'%')
            ->join('categories_business', 'categories_business.category_id', '=', 'categories.id')
            ->get()->toArray();

        $business_id[] = 0;
        foreach($category as $chave => $elemento){
            if(is_array($elemento)){
                $business_id[] = $elemento['id'];
            }
        }

        $businesses = Business::whereIn('id', $business_id)
            ->orWhere('title', 'LIKE', '%'.$search.'%')
            ->orWhere('telephone', 'LIKE', '%'.$search.'%')
            ->orWhere('zipcode', 'LIKE', '%'.$search.'%')
            ->orWhere('city', 'LIKE', '%'.$search.'%')
            ->get();

        return view('web.filter',[
            'businesses' => $businesses,
            'search' => $search
        ]);
    }

}
