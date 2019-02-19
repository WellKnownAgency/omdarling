@extends('mobile/blogmain')

@section('title', 'Yoga Category | OmDarling Blog')

@section('description', 'Living the yogi life, my journey to yoga practice, and how yoga transformed my life. Everything from postures and breathing exercises to living yoga off the mat.')

@section('keywords', '')

@section('content')

<header class="container">
  <div class="about">
    <h2>about</h2>
  </div>
  <div class="category">
    <h1>yoga</h1>
  </div>
  <div class="category-intro">
    <p style="text-align: center;">Living the yogi life, my journey to yoga practice, and how yoga transformed my life. Everything from postures and breathing exercises to living yoga off the mat.</p>
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
