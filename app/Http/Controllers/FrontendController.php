<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    public function index()
    {
        return view('frontend.index');
    }


    public function check()
    {
        return view('frontend.checkout');
    }
    public function prod()
    {
        return view('frontend.product_details');
    }
}
