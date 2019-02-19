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
		      What is OmDarling Yoga?
		    </h2>
				<p style="font-size: 25px; font-weight: 300; text-align: justify;">
					Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
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
			<h2>Want to learn Yoga? Sign up for a personal class and get 50% off!</h2>
			<p style="font-size:16px;">Get a yoga experience with professional Yogi teacher!</p>
			<br>
			<a class="contact-form-btn" href="#contact-me">Sign Up</a>
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
				<img src="/images/dharma.jpg" width="300px" class="round-img">
			</div>
		</div>
		<div class="col-half">
			<div>
				<h2 class="text-center" style="font-size: 30px;">
					My experience
				</h2>
				<p style="font-size: 22px; font-weight: 300; text-align: justify;">
					I am certified  Dharma Yoga Teacher. I got my certificate this summer and I've been teaching since then. In the summertime, I held classes at the beach, Coney Island.
					Currently working in a studio Move with Grace in Bed-Stuy, Brooklyn and also teaching privates.
					In April will attend a Vinyasa TT. So looking forward to deep in my knowledge and the practice to be able to share it with you.
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
