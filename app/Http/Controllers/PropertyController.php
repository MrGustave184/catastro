<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function register()
    {
        return view('property.register');
    }

    public function search()
    {
        return view('property.search');
    }
}
