<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Productcontroller extends Controller
{
    //
    function index()
        {
            $data=product::all();
            return view('product',['products'=>$data]);
        }
    
}
