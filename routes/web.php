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

/* Categories */
/*Route::get('/blog/{slug}', 'CategoryController@show')->name('category');*/

Route::post('/subscription', 'SubscriptionsController@store');
Route::post('/blog/posts/{post}/comments/', 'CommentsController@store');
Route::get('/sitemap.xml', 'PagesController@sitemap');
Route::post('/contact-us', 'PagesController@contactUs');

/*Route::get('/coming-soon', function () {
  if ( Agent::isMobile() ) {
      return view('coming');
  } else {
      return view('coming');
  }
});*/


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

/*
Route::any('{query}',
  function() { return redirect('/coming-soon'); })
  ->where('query', '.*');
*/

Route::get('/', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(3);
      return view('mobile.index', compact('posts'));;
  } else {
    $posts = App\Post::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(3);
      return view('index', compact('posts'));
  }
});

Route::get('/blog', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(9);
      return view('mobile.blog.index', compact('posts'));;
  } else {
    $posts = App\Post::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(9);
      return view('blog.index', compact('posts'));
  }
});

Route::get('/about-me', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(3);
      return view('mobile.about-me', compact('posts'));;
  } else {
    $posts = App\Post::orderBy('id', 'desc')->where('status', 'PUBLISHED')->paginate(3);
      return view('about-me', compact('posts'));
  }
});

Route::get('/blog/travel', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
    return view('mobile.blog.travel', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 4)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
    return view('blog.travel', compact('posts'));
  }
});
Route::get('/blog/travel/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->where('status', 'PUBLISHED')->firstOrFail();
    return view('mobile.blog.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->where('status', 'PUBLISHED')->firstOrFail();
    return view('blog.single', compact('post'), compact('tag'));
  }
});

Route::get('/blog/yoga', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 5)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
    return view('mobile.blog.yogi', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 5)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
    return view('blog.yogi', compact('posts'));
  }
});
Route::get('/blog/yoga/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
  	$post = App\Post::where('slug', '=', $slug)->where('category_id', 5)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('mobile.blog.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 5)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('blog.single', compact('post'), compact('tag'));
  }
});

Route::get('/blog/mindfulness', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 6)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
    return view('mobile.blog.mindfulness', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 6)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
    return view('blog.mindfulness', compact('posts'));
  }
});
Route::get('/blog/mindfulness/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 6)->where('status', 'PUBLISHED')->firstOrFail();
    return view('mobile.blog.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 6)->where('status', 'PUBLISHED')->firstOrFail();
    return view('blog.single', compact('post'), compact('tag'));
  }
});

Route::get('/blog/body-and-soul', function () {
  if ( Agent::isMobile() ) {
    $posts = App\Post::where('category_id', 7)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
      return view('mobile.blog.body-and-soul', compact('posts'));
  } else {
    $posts = App\Post::where('category_id', 7)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
      return view('blog.body-and-soul', compact('posts'));
    }
});
Route::get('/blog/body-and-soul/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
  	$post = App\Post::where('slug', '=', $slug)->where('category_id', 7)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('mobile.blog.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 7)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('blog.single', compact('post'), compact('tag'));
  }
});

Route::get('/blog/food', function () {
  if ( Agent::isMobile() ) {
      $posts = App\Post::where('category_id', 3)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(5);
      //$categories = App\Category::all();
      return view('mobile.blog.food', compact('posts'));
    } else {
      $posts = App\Post::where('category_id', 3)->where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
      //$categories = App\Category::all();
      return view('blog.food', compact('posts'));
    }
});
Route::get('/blog/food/{slug}', function($slug){
  if ( Agent::isMobile() ) {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 3)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('mobile.blog.single', compact('post'), compact('tag'));
  } else {
    $tag = App\Tag::firstOrFail();
    $post = App\Post::where('slug', '=', $slug)->where('category_id', 3)->where('status', 'PUBLISHED')->firstOrFail();
  	return view('blog.single', compact('post'), compact('tag'));
  }
});

Route::get('/blog/tag/{slug}', function ($slug) {
  if ( Agent::isMobile() ) {
      $tag = App\Tag::where('slug', '=', $slug)->firstOrFail();
      $post = App\Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
      return view('mobile.blog.tag', compact('post'), compact('tag'));
  } else {
      $tag = App\Tag::where('slug', '=', $slug)->firstOrFail();
      $post = App\Post::where('status', 'PUBLISHED')->orderBy('id', 'desc')->paginate(9);
      return view('blog.tag', compact('post'), compact('tag'));
    }
});
