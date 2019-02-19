@extends('mainabout')

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
      <!-- <div class="intro-sm" style="margin-top: 60px;">
        Sign up for a Private Yoga Class
      </div>
      <div style="margin-top: 20px;">
        <a href="#contact-me" class="contact-form-btn" >Sign Up</a>
      </div> -->
    </div>

  </div>
</header>
<section class="row">
  <div class="column bg-white">
    <div class="container-left-half">
      <div class="block-text-l">
        About Me
      </div>
      <hr class="style-blue">
      <div class="text-box">
        <h1 style="font-weight:bold;font-size: 25px;text-align: justify;">Thank you for finding time to step by at my
           new blog OM!Darling.</h1><p> I have created it with one simple but at the same time complicated idea…but first, who am I?</p>
        <p style="font-weight:bold;">My name is Anastasia. I’m a yoga-lover and a spiritual seeker with
        passion for all kinds of art, photography and travel.</p>
        <p>You can find me in a meditation pose every day at 4:30 in the morning breathing slowly and not moving for an hour.
          You can also find me at a jazz bar casually talking to my friends with a glass of rosé in my hand.</p>

        <p>You can see me wearing leggings and sports bra all day long and rocking dresses and designer high heels at night.</p>

        <p>My daily diet is raw vegan food but when I travel I won’t say “no” to croissants or pasta.</p>

        <p style="font-weight: bold;">I CAN GO ON AND ON :)</p>
      </div>
    </div>
  </div>
  <div class="column bg-image">
    <div class="container-right-half">
      <div class="block-text-3">
        <h2><span class="quotes">ʺ</span> Yoga Studio <br> is my church.</br>
            ocean is my drug.<br>
            art is my religion.<span>ʺ</span></h2>
      </div>

    </div>
  </div>

</section>
<section class="block3">
  <div class="column col-block3">
    <div class="container-left-half">
      <div class="text-box-2">
        <h2>Finding balance<br>
        between your spiritual<br>
        path and busy every<br>
        day life and staying<br>
        grounded at the same<br>
        time is the main idea<br>
        behind this blog.<h2>
      </div>
      <hr class="style-white">
      <div class="img-box2">
        <div class="text-box-3">
          <p><span style="font-weight: bold; text-transform: uppercase;">I just wanted to show you that we don’t need to be somebody else to achieve spirituality.</span>
            We don’t need to be perfect. We can stay true to ourselves and just balance it off with the right things.</p>

          <p>You can be doing all the fancy asanas and be a total asshole in life.
            You can be a dude with a body covered with tattoos but have a big open heart and follow a spiritual path.</p>
        </div>
      </div>
    </div>

  </div>
</section>
<section class="block4">
  <div class="column col-53">
    <div class="container-left-half">
      <div class="img-box">
      </div>
    </div>
  </div>
  <div class="column col-47">
    <div class="container-right-half">
      <div class="block-text-4-l">
        <h2>Life is
        all <br>about balance
        with your spirit,
        body and mind!</h2>
      </div>
      <hr class="style-block4">
      <div class="block-text-4">
          On this blog I’m going to talk about my yoga path, spirituality, plant based diet, healthy lifestyle
          and share my travel notes, recipes, my thoughts and some personal experience and information you might
          find useful. I won’t bore you to death, I promise ;).
      </div>
    </div>
  </div>
</section>
@include('partials/_profile-pic')
<section class="container-sm">
  <div class="related">
    Latest
  </div>
</section>
<section class="container">
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
@stop
