<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
  public function index()
  {
      return Post::with('comments')->latest()->get();
  }

  public function show($id)
  {
    return Post::with('comments')->findOrfail($id);
  }
}
