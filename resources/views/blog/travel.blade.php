@extends('mainblog')

@section('title', 'Travel Category | OmDarling Blog')

@section('description', 'My travel notes, what I eat, where I stay, what I do, my top tips and places.
How to travel like a local and make the most of it.')

@section('keywords', '')

@section('content')
<header class="container-sm">
  <div class="about">
    <h2>about</h2>
  </div>
  <div class="category">

    <h1>TRAVEL</h1>

  </div>
  <div class="category-intro">
    <p style="text-align: center;">My travel notes, what I eat, where I stay, what I do, my top tips and places.
How to travel like a local and make the most of it. </p>
  </div>
</header>
<section class="container-sm" style="margin-bottom: 40px;">
  <hr class="small-grey">
  @foreach($posts as $post)
  <div class="three-blocks">
      <div class="related-block ">
          <a href="/travel/{{ $post->slug }}" ><img src="{{ Voyager::image( $post->image ) }}"/></a>
      </div>
      <div class="block-70 ">
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}"> <h3 class="title">{{ $post->title }}</h3></a>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>

      </div>
      <a href="/travel/{{ $post->slug }}" class="see-more">see more</a>
  </div>
  <hr class="small-grey">
  @endforeach
</section>
<section class=" container-sm pag">
{{ $posts->links() }}
</section>
@include('partials/_profile-pic')
@stop
