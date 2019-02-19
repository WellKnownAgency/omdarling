@extends('mobile/main')

@section('title', 'Home Page | OmDarling Blog')

@section('description', 'OmDarling is my Personal Blog about Travel, Food, Yoga, Mindfulness, Body&Soul. Find out the best recipes, travel destinations and more with Omdarling Blog.')

@section('keywords', '')

@section('content')
<!-- <header class="main-header">
  <div class="container ">
    <div class="intro-text">
      <div class="intro-l">
        Hello
      </div>
      <div class="intro-l">
        Darlings!
      </div>
      <hr align="left">
      <div class="intro-sm">
        my name is anastasia
      </div>
    </div>
  </div>
</header> -->
<section class="container">
  @foreach($posts as $post)
      <div class="blocks-3">
        <div class="home">
          <a href="/blog/{{ $post->category->slug }}/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}"/></a>
          <span class="top-right">{{ $post->category->name}}</span>
        </div>
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}"><h3 class="title-home">{{ $post->title }}</h3></a>
      </div>
  @endforeach
</section>
<section class="container pag">
{{ $posts->links() }}
</section>
@include('mobile/partials/_profile-pic')
@stop
