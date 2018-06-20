@extends('mobile/blogmain')

@section('title', 'About Me | OmDarling')

@section('description', '')

@section('keywords', '')

@section('content')

<header class="container">
  <div class="about">
    <h2>about</h2>
  </div>
  <div class="category">
    <hr class="category-style">
    <h1>Body & Soul</h1>
    <hr class="category-style">
  </div>
  <div class="category-intro">
    <p style="text-align: center;">Nurturing and loving yourself to be in harmony with who you are. It is about acceptance, being kind to yourself and taking care of your body, mind and soul. </p>
  </div>
</header>
<section class="container">
  @foreach($posts as $post)
      <div class="blocks-3">
          <img src="{{ Voyager::image( $post->image ) }}"/>
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <h3 class="title">{{ $post->title }}</h3>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}" class="see-more">see more</a>
      </div>
  @endforeach
</section>
<section class="container pag">
{{ $posts->links() }}
</section>
<section class="container">
      <hr class="style-block5">
      <div class="profile-pic">
        <img src="/images/profile.png"/>
        <img style="width: 100%;" src="/images/anastasia.png"/>
      </div>
      <hr class="style-block5">
</section>
@stop
