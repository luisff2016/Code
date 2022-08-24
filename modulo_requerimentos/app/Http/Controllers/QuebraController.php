<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuebraController extends Controller
{
    public function quebra(){
        return view('site.quebra');
    }
}
