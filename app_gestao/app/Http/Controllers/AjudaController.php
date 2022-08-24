<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjudaController extends Controller
{
    public function ajuda(){
        return view('site.ajuda');
    }
}
