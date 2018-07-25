@extends('mobile/blogmain')

@section('title', "Travel Category | OmDarling Blog")

@section('description', "")

@section('keywords', "")

@section('content')

<header class="container">
  <div class="about">
    <h2>about</h2>
  </div>
  <div class="category">
    <h1>Travel</h1>
  </div>
  <div class="category-intro">
    <p style="text-align: center;">My travel notes, what I eat, where I stay, what I do, my top tips and places.
How to travel like a local and make the most of it.</p>
  </div>
</header>
<section class="container">
  @foreach($posts as $post)
      <div class="blocks-3">
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}"/></a>
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}"><h3 class="title">{{ $post->title }}</h3></a>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}" class="see-more">see more</a>
      </div>
  @endforeach
</section>
<section class="container pag">
{{ $posts->links() }}
</section>
@include('mobile/partials/_profile-pic')
@stop
