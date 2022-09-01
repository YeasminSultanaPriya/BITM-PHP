<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home');
    }
    public function bitm(){
        return view('bitm');
    }
    public function basis(){
        return view('basis');
    }

}
