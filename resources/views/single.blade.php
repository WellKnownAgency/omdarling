@extends('mainblog')

@section('title', "$post->title | OmDarling Blog")

@section('description', "$post->meta_description")

@section('keywords', "$post->meta_keywords")

@section('content')
<header class="container-sm">
  <div onclick="goBack()" class="back">
    <i  class="fas fa-back fa-arrow-left"></i>
    back
  </div>
  <div style="margin-top: 20px;">
    <span class="tags">tags</span>
    @foreach ($post->tags as $tag)
    <a href="/tag/{{ $tag->slug }}"><span class="tag">{{ $tag->name }}</span></a>
    @endforeach
  </div>
</header>
<section class="container-sm">
  <article>
    <div class="row">
      <div class="col-md-60">
        <div class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</div>
        <h1 class="title">{{ $post->title }}</h1>
        <h2 class="excerpt2">{{ $post->excerpt }}</h2>
      </div>
      <div class="col-md-40">
        <div class="post-img">
          <img src="{{ Voyager::image( $post->image ) }}"/>
        </div>
      </div>
    </div>
    <hr class="style-post">
    <div class="main-post">
      {!! $post->body !!}
    </div>
  </article>
</section>
<section class="container-sm profile">
      <hr class="style-block5 mg-bot">
      <div class="profile-pic">
        <img src="/images/profile.png"/>
        <img src="/images/anastasia.png"/>
      </div>
      <hr class="style-block5 mg-top">
</section>
<section class="container-sm">
  <div class="share">
    Share <a href=""><i  class="fab fa-shares fa-facebook-f"></i></a> <a href=""><i  class="fab fa-shares fa-twitter"></i></a> <a href=""><i  class="fab fa-shares fa-vk"></i></a> <a href=""><i class="fab fa-shares fa-google-plus-g"></i></a>
  </div>
</section>
<section class="container-sm">
    <div class="related">
      Related
    </div>
  </section>
  <section class="container-sm blocks-3-2">
    @foreach($tag->posts->slice(0, 3)  as $post)
      <div class="blocks-3">
        <img src="{{ Voyager::image( $post->image ) }}"/>
        <div class="blocks-3-text">
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <h3 class="title">{{$post->title }}</h3>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}" class="see-more">see more</a>
        </div>
      </div>
    @endforeach
</section>
<section class="container-sm">
  <form action="{{ route('comment', $post->id) }}" method="POST">
      {{csrf_field()}}
          <div class="comments">

            <input class="comment-name" type="text" name="name" placeholder="Your name">

            <input class="comment-email" type="email" name="email" placeholder="Your email">

            <textarea class="comment" type="text" name="comment" placeholder="leave a comment..."></textarea>

            <button class="btn-comment">Post</button>
          </div>
    </form>
<hr class="style-comment">
@foreach($post->comments as $comment)
  <div class="comment-dialog">
    <p class="username"> {{ $comment->name }}</p>
    <p class="smallp">{{ date('F nS, Y - g:iA', strtotime($comment->created_at)) }}</p>
    <p class="text">  {!! $comment->comment !!}</p>
  </div>
@endforeach
</section>
@stop
