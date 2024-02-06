<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Laundry;

class LaundryController extends Controller
{
    function readAll()
    {
        //Proses mengaitkan API dengan Models
        $laundries = Laundry::with('user','shop')->get();

        return response()->json([
            'data' => $laundries,
        ], 200);
    }
}
