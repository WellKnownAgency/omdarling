<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use Mail;

class PagesController extends Controller
{
  public function sitemap()
  {
      $posts = Post::orderBy('category_id', 'DESC')->with('tags')->get();
      return response()->view('sitemap', compact('posts'))->header('Content-Type', 'text/xml');
  }

  public function contactUs(Request $request) {
    $this->validate($request, [
      'name'      => 'required',
      'email'     => 'required|email',
      'phone'     => 'required'
    ]);

    $data = array(
      'name'      => $request->name,
      'email'     => $request->email,
      'phone'     => $request->phone
    );

    Mail::send('emails.notification', $data, function($message) use ($data){
      $message->from('omdarlingblog@gmail.com');
      $message->to('omdarlingblog@gmail.com');
      $message->subject('Contact Request');

    });

    $notification = array(
    	'message' => 'Message was Successfully Sent!',
    	'alert-type' => 'success'
    );

    return back()->with($notification);
  }
}
