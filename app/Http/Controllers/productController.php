<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    function index()
    {
        return view('pages.product-price');
    }
}
