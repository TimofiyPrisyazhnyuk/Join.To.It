<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TableController extends Controller
{
    public function tables()
    {
        return view('tables.tables');
    }
}
