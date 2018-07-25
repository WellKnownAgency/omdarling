@extends('mainblog')

@section('title', 'Body & Soul Category | OmDarling Blog')

@section('description', '')

@section('keywords', '')

@section('content')
<header class="container-sm">
  <div class="about">
    <h2>about</h2>
  </div>
  <div class="category">

    <h1>Body & Soul</h1>

  </div>
  <div class="category-intro">
    <p style="text-align: center;">Nurturing and loving yourself to be in harmony with who you are. It is about acceptance, being kind to yourself and taking care of your body, mind and soul. </p>
  </div>
</header>
<section class="container-sm" style="margin-bottom: 40px;">
  <hr class="small-grey">
  @foreach($posts as $post)
  <div class="three-blocks">
      <div class="related-block ">
          <a href="/body-and-soul/{{ $post->slug }}" ><img src="{{ Voyager::image( $post->image ) }}"/></a>
      </div>
      <div class="block-70 ">
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <a href="/body-and-soul/{{ $post->slug }}"> <h3 class="title">{{ $post->title }}</h3></a>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>

      </div>
      <a href="/{{ $post->category->slug }}/{{ $post->slug }}" class="see-more">see more</a>
  </div>
  <hr class="small-grey">
  @endforeach
</section>
@include('partials/_profile-pic')
@stop
