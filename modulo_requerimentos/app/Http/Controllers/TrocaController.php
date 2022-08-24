<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrocaController extends Controller
{
    public function troca(){
        return view('site.troca');
    }
}
