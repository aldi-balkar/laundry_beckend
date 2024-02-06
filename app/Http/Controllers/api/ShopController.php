<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    function readAll()
    {
        $shops = Shop::all();

        return response()->json([
            'data' => $shops,
        ], 200);
    }
}
