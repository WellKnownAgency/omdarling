@extends('mobile/blogmain')

@section('title', 'Body & Soul Category | OmDarling Blog')

@section('description', 'Nurturing and loving yourself to be in harmony with who you are. It is about acceptance, being kind to yourself and taking care of your body, mind and soul.')

@section('keywords', '')

@section('content')

<header class="container">
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
