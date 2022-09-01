<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blog;
    public function addBlog(){
        return view('blog.index');
    }
    public function newBlog(Request $request){
        /*$this->blog = new Blog();
        $this->blog->blog_title = $request->blog_title;
        $this->blog->blog_author = $request->blog_author;
        $this->blog->blog_description = $request->blog_description;
        $this->blog->image = $request->image;
        $this->blog->save();*/

        Blog::create($request->except('_token'));

       /* Blog::create([
            'blog_title' => $request->blog_title,
            'blog_author' => $request->blog_author,
            'blog_description' => $request->blog_description,
            'image' => $request->image,
        ]);*/
        return redirect()->back()->with('message', 'Blog created successfully.');


    }
}
