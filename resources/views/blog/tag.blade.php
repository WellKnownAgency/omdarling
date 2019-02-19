@extends('mainblog')

@section('title', "$tag->name Tag | OmDarling Blog")

@section('description', "$tag->name omdarling blog tag.")

@section('keywords', '')

@section('content')
<header class="container-sm">
  <div class="about">
    <h2>about</h2>
  </div>
  <div class="category">
    <hr class="category-style">
    <h1>#{{ $tag->name }}</h1>
    <hr class="category-style">
  </div>
</header>
<section class="container-sm" style="margin-bottom: 40px;">
  <hr class="small-grey">
  @foreach($tag->posts->slice(0, 9)  as $post)
  <div class="three-blocks">
      <div class="related-block ">
          <a href="/travel/{{ $post->slug }}" ><img src="{{ Voyager::image( $post->image ) }}"/></a>
      </div>
      <div class="block-70 ">
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}"> <h3 class="title">{{ $post->title }}</h3></a>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>

      </div>
      <a href="/{{ $post->category->slug }}/{{ $post->slug }}" class="see-more">see more</a>
  </div>
  <hr class="small-grey">
  @endforeach
</section>
<section class=" container-sm pag">

</section>
@include('partials/_profile-pic')
@stop
