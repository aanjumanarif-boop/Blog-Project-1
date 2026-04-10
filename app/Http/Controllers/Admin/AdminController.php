<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactMessage;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
     

        return view('admin.dashboard');
    }
    public function logout()
    {
      Auth::logout();
      return redirect('login');
    }

    public function showSettings()
    {
       
        $setting = Setting::first(); 
       
        return view('admin.settings.edit',compact('setting'));

    }
    public function updateSettings(Request $request)
    {
         $setting = Setting::first(); 
        $setting->about_me = $request->about_me;
        $setting->facebook = $request->facebook;
        $setting->twitter = $request->twitter;
        $setting->github = $request->github;
        
        $setting->save();
      toastr()->success('setting Update successfullu.');
      return redirect()->back();

    }

     public function showMessages ()
     {
        $messages = ContactMessage::orderBy('id','desc')->paginate(20);
   
       return view('admin.settings.messages',compact('messages'));
     }

     public function deleteMessage($id)
     {
       $message = ContactMessage::find($id);
       $message->delete();
        toastr()->success('message delete successfully');
      return redirect()->back();
     }

}
