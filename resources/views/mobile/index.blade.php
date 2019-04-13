@extends('mobile/mainabout')

@section('title', 'Home Page | OmDarling Blog')

@section('description', '')

@section('keywords', '')

@section('content')
<header>
  <div class="main-header-col">
  </div>
</header>
<section class="container">
	<div class="row">
		<div class="col-half">
			<div>
				<h2 class="text-center" style="font-size: 30px;">
		      About Me
		    </h2>
				<p style="font-size: 25px; font-weight: 300; text-align: justify;">
					My name is Anastasia. Welcome to your place to learn how to bring yoga into your life.

I’m a yoga-lover and a spiritual seeker with passion for all kinds of art, photography and travel.

My love for yoga practice has led me to teaching yoga.

When I experienced all the benefits of practice I just wanted to share it with as many people as I can.

Yoga has taught me to live each day with open heart and be in this very moment. It has taught me how to be patient and appreciate little things, how to trust and be grateful for everything in my life. How to live simple yet meaningful and mindfulness life. It has taught me a lot and still teaching me how to be the best version of myself. I am not always perfect but I am trying my best to be better each day. Not always successful but there is a long life ahead.

I would be so honored to share this journey with you.
			</div>
		</div>
		<div class="col-half">
			<div class="img-box-home">

			</div>
		</div>

	</div>
</section>
<section>
	<div class="text-center blue-bg action-sec shadow-inside">
		<div class="container">
			<h2>Sign up for a personal class and get 50% off!</h2>
			<a class="contact-form-btn" href="#contact-me">Sign Up</a>
			<br>
			<br>
		</div>
	</div>
</section>
<section class="container">
	<div class="row">
		<div class="col-half">
			<div class="center-img">
				<img src="/images/square.jpg" width="300px" class="round-img">
			</div>
		</div>
		<div class="col-half">
			<div>
				<h2 class="text-center" style="font-size: 30px;">
					My intention
				</h2>
				<p style="font-size: 22px; font-weight: 300; text-align: justify;">
					To motivate and inspire students to connect with their inner self to explore their potential and heal through the power of Yoga.
					I teach the classic Hatha Yoga.
					In my class, we will explore various postures, do breathing exercises and I will walk you through a guided meditation.
					The mindful Vinyasa Flow mixed with holding postures for a long time will help you to achieve the meditative state of mind. Accessible for all levels
				</p>
			</div>
		</div>

	</div>
</section>
<section class="container">
	<div class="row">
		<div class="col-half">
			<div class="center-img">
				<img src="/images/exp2.jpg" width="300px" class="round-img">
			</div>
		</div>
		<div class="col-half">
			<div>
				<h2 class="text-center" style="font-size: 30px;">
					My experience
				</h2>
				<p style="font-size: 22px; font-weight: 300; text-align: justify;">
					I am a certified Hatha Vinyasa and Dharma Yoga Teacher. I got my first 200 h certificate summer 2018 and I've been teaching ever since. In the summertime, I held classes at the beach and parks. In April I received my Vinyasa Certificate. Currently working in different studios in New York and teaching private classes.
			</div>
		</div>



	</div>
</section>
<section class="container">
  <div class="related">
    Latest
  </div>
</section>
<section class="container">
  @foreach($posts as $post)
      <div class="blocks-3">
        <div class="home">
          <a href="/blog/{{ $post->category->slug }}/{{ $post->slug }}"><img src="{{ Voyager::image( $post->image ) }}"/></a>
          <span class="top-right">{{ $post->category->name}}</span>
        </div>
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <a href="/blog/{{ $post->category->slug }}/{{ $post->slug }}"><h3 class="title-home">{{ $post->title }}</h3></a>
      </div>
  @endforeach
</section>
@stop
