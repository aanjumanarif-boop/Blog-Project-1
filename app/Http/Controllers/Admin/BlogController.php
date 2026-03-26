<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function createblog()
    {
        return view('admin.blog.create');
    
    }
    public function storeBlog(Request $request)
    {
      $blog = new Blog(); 
      $blog->title = $request->title;
      $blog->subtitle = $request->subtitle;
      $blog->author_name = $request->author_name;   
      $blog->Blog_details = $request->Blog_details; 

      if(isset($request->image)){

      $image =$request->file('image');
      $imageName =rand().$image->getClientOriginalExtension();//1656554.jpg
      $image->move('blogs', $imageName) ;
      $blog->image =url('blogs/'.$imageName);//http://127.0.0.1:5500/forms/general.html
      }
      $blog->save();
             toastr()->success('Blog created successfullu.');
      return redirect()->back();
    }
}



