<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $variants = [
            [
                'title'    => 'OMSETin',
                'subtitle' => 'Stok',
                'image'    => 'img/variants/why-us-mockup1.png',
            ],
        ];
        // ... tambahkan data lain
        $testimonials = [
            [
                'name'     => 'John Doe',
                'position' => 'CEO of Company',
                'company'  => 'Kasmini',
                'photo'    => 'img/testimonials/john-doe.jpg',
                'message'  => 'This is a great service!',
            ],

            // ... tambahkan data lain
        ];
        return view('pages.home', compact('variants', 'testimonials'));
    }
}
