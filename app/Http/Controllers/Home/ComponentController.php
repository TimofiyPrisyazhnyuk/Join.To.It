<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComponentController extends Controller
{


    public function navbar()
    {
        return view('components.navbar');

    }



    public function cards()
    {
        return view('components.cards');

    }
}
