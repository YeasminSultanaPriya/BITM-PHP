<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $blog, $blogs;
    public function home(){
        $this->blogs = Blog::all();
        return view('blog.home',['blogs'=>$this->blogs]);
    }
    public function detailsBlog($id){
        $this->blog = Blog::where('id',$id)->first();
        return view('blog.details', ['blog'=>$this->blog]);
    }

}
