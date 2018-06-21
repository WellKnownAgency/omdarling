<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('comment/{id}', ['uses' => 'CommentsController@postComment', 'as' => 'comment' ]);
Route::get('/sitemap.xml', 'PagesController@sitemap');


Route::get('/', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(3);
      return view('mobile.about-me', compact('posts'));;
  } else {
    $posts = App\Post::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(3);
      return view('about-me', compact('posts'));
  }
});

Route::get('/travel', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
    return view('mobile.travel', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
    return view('travel', compact('posts'));
  }
});
Route::get('/travel/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->where('status', 'PUBLISHED')->firstOrFail();
    return view('mobile.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->where('status', 'PUBLISHED')->firstOrFail();
    return view('single', compact('post'), compact('tag'));
  }
});

Route::get('/yogi', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 5)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
    return view('mobile.yogi', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 5)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
    return view('yogi', compact('posts'));
  }
});
Route::get('/yogi/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
  	$post = App\Post::where('slug', '=', $slug)->where('category_id', 5)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('mobile.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 5)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('single', compact('post'), compact('tag'));
  }
});

Route::get('/mindfulness', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 6)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
    return view('mobile.mindfulness', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 6)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
    return view('mindfulness', compact('posts'));
  }
});
Route::get('/mindfulness/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 6)->where('status', 'PUBLISHED')->firstOrFail();
    return view('mobile.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 6)->where('status', 'PUBLISHED')->firstOrFail();
    return view('single', compact('post'), compact('tag'));
  }
});

Route::get('/body-and-soul', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 7)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
      return view('mobile.body-and-soul', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 7)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
      return view('body-and-soul', compact('posts'));
    }
});
Route::get('/body-and-soul/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
  	$post = App\Post::where('slug', '=', $slug)->where('category_id', 7)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('mobile.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 7)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('single', compact('post'), compact('tag'));
  }
});

Route::get('food', function () {
  if ( Agent::isMobile() ) {
      $posts = App\Post::where('category_id', 3)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
      //$categories = App\Category::all();
      return view('mobile.food', compact('posts'));
    } else {
      $posts = App\Post::where('category_id', 3)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
      //$categories = App\Category::all();
      return view('food', compact('posts'));
    }
});
Route::get('/food/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 3)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('mobile.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 3)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('single', compact('post'), compact('tag'));
  }
});

Route::get('tag/{slug}', function ($slug) {
  if ( Agent::isMobile() ) {
      $tag = App\Tag::where('slug', '=', $slug)->firstOrFail();
      $post = App\Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
      return view('mobile.tag', compact('post'), compact('tag'), compact('posts'));
  } else {
      $tag = App\Tag::where('slug', '=', $slug)->firstOrFail();
      $post = App\Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
      return view('tag', compact('post'), compact('tag'), compact('posts'));
    }
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
