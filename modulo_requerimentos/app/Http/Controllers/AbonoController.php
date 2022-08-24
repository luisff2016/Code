<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonoController extends Controller
{
    public function abono(){
        return view('site.abono');
    }
}
