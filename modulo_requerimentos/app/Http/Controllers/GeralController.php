<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeralController extends Controller
{
    public function geral(){
        return view('site.geral');
    }
}
