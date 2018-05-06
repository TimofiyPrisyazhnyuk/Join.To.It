<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChartController extends Controller
{



    public function charts()
    {
        return view('charts.charts');
    }


}
