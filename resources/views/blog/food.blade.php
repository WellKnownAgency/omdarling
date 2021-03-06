@extends('mainblog')

@section('title', 'Food Category | OmDarling Blog')

@section('description', 'Life is too short for counting calories! I eat simple and healthy meals and most importantly they don’t take more than 30 mins. Get excited for vegan, raw and detox recipes.')

@section('keywords', '')

@section('content')
<header class="container-sm">
  <div class="about">
    <h2>about</h2>
  </div>
  <div class="category">

    <h1>FOOD</h1>

  </div>
  <div class="category-intro">
    <p style="text-align: center;">Life is too short for counting calories! I eat simple and healthy meals and most importantly they don’t take more than 30 mins. Get excited for vegan, raw and detox recipes.  </p>
  </div>
</header>
<section class="container-sm" style="margin-bottom: 40px;">
  <hr class="small-grey">
  @foreach($posts as $post)
  <div class="three-blocks">
      <div class="related-block ">
          <a href="/food/{{ $post->slug }}" ><img src="{{ Voyager::image( $post->image ) }}"/></a>
      </div>
      <div class="block-70 ">
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <a href="/food/{{ $post->slug }}"> <h3 class="title">{{ $post->title }}</h3></a>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>

      </div>
      <a href="/{{ $post->category->slug }}/{{ $post->slug }}" class="see-more">see more</a>
  </div>
  <hr class="small-grey">
  @endforeach
</section>
<section class=" container-sm pag">
{{ $posts->links() }}
</section>
@include('partials/_profile-pic')
@stop
