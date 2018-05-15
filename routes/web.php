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
Route::post('yogi/comment/{id}', ['uses' => 'CommentsController@postComment', 'as' => 'comment' ]);
Route::post('travel/comment/{id}', ['uses' => 'CommentsController@postComment', 'as' => 'comment' ]);
Route::post('food/comment/{id}', ['uses' => 'CommentsController@postComment', 'as' => 'comment' ]);
Route::post('mindfulness/comment/{id}', ['uses' => 'CommentsController@postComment', 'as' => 'comment' ]);
Route::post('body-and-soul/comment/{id}', ['uses' => 'CommentsController@postComment', 'as' => 'comment' ]);

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
	$post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->where('status', 'PUBLISHED')->firstOrFail();
	return view('single', compact('post'));
});

Route::get('/yogi', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
    return view('mobile.yogi', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
    return view('yogi', compact('posts'));
  }
});
Route::get('/yogi/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->where('status', 'PUBLISHED')->where('category_id', 4)->firstOrFail();
	return view('single', compact('post'));
});

Route::get('/mindfulness', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
    return view('mobile.mindfulness', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
    return view('mindfulness', compact('posts'));
  }
});
Route::get('/mindfulness/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->where('status', 'PUBLISHED')->firstOrFail();
	return view('single', compact('post'));
});

Route::get('/body-and-soul', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
      return view('mobile.body-and-soul', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
      return view('body-and-soul', compact('posts'));
    }
});
Route::get('/body-amd-soul/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->where('status', 'PUBLISHED')->firstOrFail();
	return view('single', compact('post'));
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
  	$post = App\Post::where('slug', '=', $slug)->where('category_id', 3)->where('status', 'PUBLISHED')->firstOrFail();
    $posts = App\Post::orderBy('id', 'asc')->where('category_id', 3)->where('status', 'PUBLISHED')->paginate(3);
  	return view('mobile.single', compact('post'), compact('posts'));
  } else {
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 3)->where('status', 'PUBLISHED')->firstOrFail();
    $posts = App\Post::orderBy('id', 'asc')->where('category_id', 3)->where('status', 'PUBLISHED')->paginate(3);
  	return view('single', compact('post'), compact('posts'));
  }
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
