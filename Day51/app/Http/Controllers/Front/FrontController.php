<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home(){
        return view('front.home.home',[
            'articles'=> Article::where('status',1)->get()
        ]);
    }
    public function articleDetails($slug){
        return view('front.articles.details',[
            'article' => Article::where('slug', $slug)->first(),
            'recentArticles'=>Article::where('status',1)->latest()->take(3)->get()
        ]);
    }

}
