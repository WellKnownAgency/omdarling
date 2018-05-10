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
    <h1>yogi</h1>
    <hr class="category-style">
  </div>
  <div class="category-intro">
    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
       sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
       aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud
        exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea
         commodo consequat. </p>
  </div>
</header>
<section class="container">
  @foreach($posts as $post)
      <div class="blocks-3">
          <img src="{{ Voyager::image( $post->image ) }}"/>
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <h3 class="title">{{ $post->title }}</h3>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>
          <a href="" class="see-more">see more</a>
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
<section class="container mg-top-60">
    <div class="email">
      Healthy and Mindful lifestyle can be fun!<br> and i'll show you how!
    </div>
    <div class="input">
      <form>
        <input type="text" placeholder="your e-mail" name="email" required>
        <button class="subscribe">subscribe</button>
      </form>
    </div>
</section>
@stop
