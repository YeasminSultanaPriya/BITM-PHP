<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $blog, $blogs;
    public function addBlog(){
        return view('blog.index');
    }

    public function manageBlog(){
    //        take(3) => to take 3 items
        $this->blogs = Blog::orderBy('id','DESC')->get();
        return view('blog.manage', ['blogs' => $this->blogs]);
    }

    public function newBlog(Request $request){

        /*$this->blog = new Blog();
        $this->blog->blog_title = $request->blog_title;
        $this->blog->blog_author = $request->blog_author;
        $this->blog->blog_description = $request->blog_description;
        $this->blog->image = $request->image;
        $this->blog->save();*/


        /*Blog::create($request->except('_token'));*/

       /* Blog::create([
            'blog_title' => $request->blog_title,
            'blog_author' => $request->blog_author,
            'blog_description' => $request->blog_description,
            'image' => $request->image,
        ]);*/
       $this->blog = new Blog();
       $this->blog->createBlog($request);
       return redirect()->back()->with('message', 'Blog created successfully.');

    }
    public function deleteBlog($id){
        //first(); => to select a single row
        /*$this->blog = Blog::where('id',$id)->first(); // it can be execute with any column */
        $this->blog = Blog::find($id); // it works with id only
        if (file_exists($this->blog->image)){
            unlink($this->blog->image);
        }
        $this->blog->delete();
        return redirect()->back()->with('message', 'Blog deleted successfully.');
    }
    public function editBlog($id){
        $this->blog = Blog::where('id',$id)->first();
        return view('blog.edit', ['blog'=>$this->blog]);
    }
    public function updateBlog(Request $request){
        Blog::updateBlog($request);
        return redirect('/manage-blog');
    }
}
