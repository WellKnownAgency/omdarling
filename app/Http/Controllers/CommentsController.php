<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
  public function index()
  {
    return Comment::latest()->with('post')->get();
  }


  public function store(Request $request, $post_id) {

    $this->validate($request, array(
            'name'      =>  'required|max:255',
            'email'     =>  'required|email|max:255',
            'comment'   =>  'required|max:2000',
          ));

        $post = Post::findOrFail($post_id);
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->post()->associate($post);
        $comment->save();


        return redirect()->back();

  }
}
