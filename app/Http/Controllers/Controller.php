<?php

namespace App\Http\Controllers;

use App\Models\Business;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function showBusiness($id)
    {
        $business = Business::with('categories')->findOrFail($id);

        return response()->json([$business]);
    }
}
