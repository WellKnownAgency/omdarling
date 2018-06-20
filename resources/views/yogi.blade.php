@extends('mainblog')

@section('title', 'Yogi Category | OmDarling Blog')

@section('description', '')

@section('keywords', '')

@section('content')
<header class="container-sm">
  <div class="about">
    <h2>about</h2>
  </div>
  <div class="category">

    <h1>Yogi</h1>

  </div>
  <div class="category-intro">
    <p style="text-align: center;">Living the yogi life, my journey to yoga practice, and how yoga transformed my life. Everything from postures and breathing exercises to living yoga off the mat.</p>
  </div>
</header>
<section class="container-sm" style="margin-bottom: 40px;">
  <hr class="small-grey">
  @foreach($posts as $post)
  <div class="three-blocks">
      <div class="related-block ">
          <a href="/yogi/{{ $post->slug }}" ><img src="{{ Voyager::image( $post->image ) }}"/></a>
      </div>
      <div class="block-70 ">
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}"> <h3 class="title">{{ $post->title }}</h3></a>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>

      </div>
      <a href="/yogi/{{ $post->slug }}" class="see-more">see more</a>
  </div>
  <hr class="small-grey">
  @endforeach
</section>
<section class="container-sm profile">
      <hr class="style-block5 mg-bot">
      <div class="profile-pic">
        <img src="/images/profile.png"/>
        <img src="/images/anastasia.png"/>
      </div>
      <hr class="style-block5 mg-top">
</section>
@stop
