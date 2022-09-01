<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function master(){
        return view('master'); 
    }
    public function about(){
        return view('about.about');
    }
    public function home(){
        return view('home.home');
    }
    public function news(){
        $this->news = News::news();
        return view('news.news', ['news' => $this->news]);
    }
}
