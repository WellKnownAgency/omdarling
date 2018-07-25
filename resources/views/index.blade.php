@extends('main')

@section('title', 'About Me | OmDarling Blog')

@section('description', 'My name is Anastasia. I’m a yoga-lover and a spiritual seeker with passion for all kinds of art, photography and travel.')

@section('keywords', 'Yoga, Travel, Food, Mindfulness, body and soul, blog')

@section('content')
<header class="main-header">
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
</header>
<section class="container">
  <div class="grid-container">
@foreach($posts as $post)
  <div class="grid-item">
    <a href="/{{ $post->category->slug }}/{{ $post->slug }}">
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
      <a href="/{{ $post->category->slug }}/{{ $post->slug }}"><h3 class="title-home">{{ $post->title }}</h3></a>
    </div>
  </div>
@endforeach
</div>
</section>
<section class=" container-sm pag">
{{ $posts->links() }}
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
