@extends('main')

@section('title', 'Omdarling Blog')

@section('description', 'OmDarling is my Personal Blog about Travel, Food, Yoga, Mindfulness, Body&Soul. Find out the best recipes, travel destinations and more with Omdarling Blog')

@section('keywords', 'Yoga, Travel, Food, Mindfulness, body and soul, blog')

@section('content')
<!-- <header class="main-header">
  <div class="container">
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
<section class="container" style="margin-top:112px;">
  <div class="grid-container">
@foreach($posts as $post)
  <div class="grid-item">
    <a href="/blog/{{ $post->category->slug }}/{{ $post->slug }}">
      <div class="home">
        <img  src="{{ Voyager::image( $post->image ) }}"/>
        <span class="top-right">{{ $post->category->name}}</span>
        <span class="caption">
            <span class="the-btn">VIEW MORE</span>
        </span>
      </div>
    </a>

    <div class="blocks-3-text">
      <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
      <a href="/blog/{{ $post->category->slug }}/{{ $post->slug }}"><h3 class="title-home">{{ $post->title }}</h3></a>
    </div>
  </div>
@endforeach
</div>
</section>
<section class=" container-sm pag">
{{ $posts->links() }}
</section>
@include('partials/_profile-pic')
@stop
