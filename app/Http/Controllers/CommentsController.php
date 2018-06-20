<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;


class CommentsController extends Controller
{
    public function index(Post $post)
    {
        return Comment::latest()->get();
    }

    public function store(Request $request, Post $post)
    {
      $comment = new Comment();
      $comment->name = $request->name;
      $comment->comment = $request->comment;
      $comment->post_id = $request->post_id;
      $comment->save();

      return $comment;
    }
}
