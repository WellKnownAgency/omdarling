<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;

class PagesController extends Controller
{
  public function sitemap()
{

    $posts = Post::orderBy('category_id', 'DESC')->with('tags')->get();
    return response()->view('sitemap', compact('posts'))->header('Content-Type', 'text/xml');
}
}
