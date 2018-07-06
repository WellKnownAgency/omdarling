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
        return Comment::with('post')->latest()->get();
    }

    public function store(Request $request, $post_id)
    {

      $post = Post::find($post_id);
      $comment = new Comment();
      $comment->name = $request->name;
      $comment->email = $request->email;
      $comment->comment = $request->comment;
      $comment->post()->associate($post);
      $comment->save();

      return back();
    }
}
