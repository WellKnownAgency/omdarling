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

Route::get('/', function () {
  $posts = App\Post::orderBy('id', 'desc')->paginate(3);
    return view('about-me', compact('posts'));
});

Route::get('/travel', function () {
  $posts = App\Post::where('category_id', 4)->orderBy('id', 'desc')->paginate(9);
    return view('travel', compact('posts'));
});
Route::get('/travel/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->firstOrFail();
	return view('single', compact('post'));
});

Route::get('/yogi', function () {
  $posts = App\Post::where('category_id', 4)->orderBy('id', 'desc')->paginate(9);
    return view('yogi', compact('posts'));
});
Route::get('/yogi/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->firstOrFail();
	return view('single', compact('post'));
});

Route::get('/mindfulness', function () {
  $posts = App\Post::where('category_id', 4)->orderBy('id', 'desc')->paginate(9);
    return view('mindfulness', compact('posts'));
});
Route::get('/mindfulness/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->firstOrFail();
	return view('single', compact('post'));
});

Route::get('/body-and-soul', function () {
  $posts = App\Post::where('category_id', 4)->orderBy('id', 'desc')->paginate(9);
    return view('body-and-soul', compact('posts'));
});
Route::get('/body-amd-soul/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->where('category_id', 4)->firstOrFail();
	return view('single', compact('post'));
});

Route::get('food', function () {
    $posts = App\Post::where('category_id', 3)->orderBy('id', 'desc')->paginate(9);
    //$categories = App\Category::all();
    return view('food', compact('posts'));
});
Route::get('/food/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->where('category_id', 3)->firstOrFail();
  $posts = App\Post::orderBy('id', 'asc')->where('category_id', 3)->paginate(3);
	return view('single', compact('post'), compact('posts'));
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
