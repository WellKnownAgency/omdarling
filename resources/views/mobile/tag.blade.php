@extends('mobile/blogmain')

@section('title', "$tag->name | OmDarling")

@section('description', "$tag->name omdarling blog tag.")

@section('keywords', "")

@section('content')

<header class="container">
  <div class="about">
    <h2>about</h2>
  </div>
  <div class="category">
    <h1>#{{ $tag->name }}</h1>
  </div>
</header>
<section class="container">
  @foreach($tag->posts->slice(0, 9)  as $post)
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

</section>
@include('mobile/partials/_profile-pic')
@stop
