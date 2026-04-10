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
      public function listBlog()
    {
      $blogs = Blog::orderBy('id','desc')->paginate(2);
      
      return view('admin.blog.list', compact('blogs'));

    }

      public function deleteBlog($id)
   {
      $blog = Blog::find($id);

      if($blog->image && file_exists('blog/'.baseName($blog->image))){
        unlink('blog/'.baseName($blog->image));
      }

      $blog->delete();
      toastr()->success('Blog deleted successfully.');
      return redirect()->back();
   }
   
    public function editBlog($id)
{
   $blog = Blog::find($id);
   
   return view('admin.blog.edit', compact('blog'));

}
  
  public function updateBlog (Request $request, $id)
  {
     $blog = Blog::find($id);
  
     
       $blog->title = $request->title;
        $blog->subtitle = $request->subtitle;
      $blog->author_name = $request->author_name;   
      $blog->Blog_details = $request->Blog_details;


      if(isset($request->image)){
      
       if($blog->image && file_exists('blog/'.baseName($blog->image))){
       unlink('blog/'.baseName($blog->image));
      }

      $image =$request->file('image');
      $imageName =rand().$image->getClientOriginalExtension();
      $image->move('blogs', $imageName) ;
      $blog->image =url('blogs/'.$imageName);
      }

      $blog->save();
      toastr()->success('Blog Update successfullu.');
      return redirect('admin/list-blog');
      toastr()->success('Blog deleted successfully.');
  }
  




}



