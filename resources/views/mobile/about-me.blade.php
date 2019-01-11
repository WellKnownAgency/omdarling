@extends('mobile/mainabout')

@section('title', 'About Me | OmDarling')

@section('description', 'My name is Anastasia. I’m a yoga-lover and a spiritual seeker with passion for all kinds of art, photography and travel.')

@section('keywords', '')

@section('content')
<header class="main-header">
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
      <div class="intro-sm" style="margin-top: 20px;">
        Sign up for a Private Yoga Class
      </div>
      <div style="margin-top: 10px;">
        <a href="#contact-me" class="contact-form-btn" >Sign Up</a>
      </div>
    </div>
  </div>
</header>
<section class="container mg-b-20">
  <div class="block-text-l">
    About Me
  </div>
  <hr class="style-blue">
  <div class="text-box">
    <p><span style="font-weight:bold;">Thank you for finding time to step by at my
       new blog OM!Darling.</span> I have created it with one simple but at the same time complicated idea…but first, who am I?</p>
    <p style="font-weight:bold;">My name is Anastasia. I’m a yoga-lover and a spiritual seeker with
    passion for all kinds of art, photography and travel.</p>
    <p>You can find me in a meditation pose every day at 4:30 in the morning breathing slowly and not moving for an hour.
      You can also find me at a jazz bar casually talking to my friends with a glass of rosé in my hand.</p>

    <p>You can see me wearing leggings and sports bra all day long and rocking dresses and designer high heels at night.</p>

    <p>My daily diet is raw vegan food but when I travel I won’t say “no” to croissants or pasta.</p>

    <p style="font-weight: bold;">I CAN GO ON AND ON :)</p>
  </div>
</section>
<section class="bg-image" >
  <div class="container">
    <div class="block-text-3">
      <h2><span class="quotes">ʺ</span> Yoga Studio <br> is my church.</br>
          ocean is my drug.<br>
          art is my religion.<span>ʺ</span></h2>
    </div>

  </div>
</section>
<section class="block3">
  <div class="container">
    <div class="text-box-2">
      <h2>Finding balance<br>
      between your<br>
      spiritual path and<br>
      busy every day life<br>
      and staying grounded<br>
      at the same time is<br>
      the main idea<br>
      behind this blog.<h2>
    </div>
  </div>
</section>
<section class="img-box">
    <div class="container">
      <div class="text-box-3">
        <p><span style="font-weight: bold; text-transform: uppercase;">I just wanted to show you that we don’t need to be somebody else to achieve spirituality.</span>
          We don’t need to be perfect. We can stay true to ourselves and just balance it off with the right things.</p>

        <p>You can be doing all the fancy asanas and be a total asshole in life.
          You can be a dude with a body covered with tattoos but have a big open heart and follow a spiritual path.</p>
      </div>
    </div>
</section>
<section>
  <div class="container">
    <div class="block-text-4-l">
      <h2>Life is
      all <br>about balance
      with your spirit,
      body and mind!</h2>
    </div>
    <hr class="style-4">
    <div class="block-text-4">
        On this blog I’m going to talk about my yoga path, spirituality, plant based diet, healthy lifestyle
        and share my travel notes, recipes, my thoughts and some personal experience and information you might
        find useful. I won’t bore you to death, I promise ;).
    </div>
  </div>
</section>
@include('mobile/partials/_profile-pic')
<section class="container">
  <div class="related">
    Latest
  </div>
</section>
<section class="container">
  @foreach($posts as $post)
      <div class="blocks-3">
        <div class="home">
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}"/></a>
          <span class="top-right">{{ $post->category->name}}</span>
        </div>
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}"><h3 class="title-home">{{ $post->title }}</h3></a>
      </div>
  @endforeach
</section>
@stop
