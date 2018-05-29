@extends('mobile/blogmain')

@section('title', 'About Me | OmDarling')

@section('description', '$post->meta_description')

@section('keywords', '$post->meta_keywords')

@section('content')
<header class="container">
  <div onclick="goBack()" class="back">
    <i  class="fas fa-back fa-arrow-left"></i>
    back
  </div>
  <div style="margin-top: 20px; margin-bottom: 20px;">
    <span class="tags">tags</span>
    @foreach ($post->tags as $tag)
    <span class="tag">{{ $tag->name }}</span>
    @endforeach
  </div>
</header>
<section class="container">
  <article>
      <div>
        <div class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</div>
        <h1 class="title">{{ $post->title }}</h1>
        <h2 class="excerpt2">{{ $post->excerpt }}</h2>
        <div class="post-img">
          <img src="{{ Voyager::image( $post->image ) }}"/>
        </div>
      </div>
    <hr class="style-post">
    <div class="main-post">
      {!! $post->body !!}
    </div>
  </article>
</section>
<section class="container">
      <hr class="style-block5">
      <div class="profile-pic">
        <img src="/images/profile.png"/>
        <img style="width: 100%;" src="/images/anastasia.png"/>
      </div>
      <hr class="style-block5">
</section>
<section class="container">
  <div class="share">
    Share <a href=""><i  class="fab fa-shares fa-facebook-f"></i></a> <a href=""><i  class="fab fa-shares fa-twitter"></i></a> <a href=">"<i  class="fab fa-shares fa-vk"></i></a> <a href=">"<i class="fab fa-shares fa-google-plus-g"></i></a>
  </div>
</section>
<section class="container">
  <div class="related">
    Related
  </div>
</section>
<section class="container">
  @foreach($tag->posts->slice(0, 3)  as $post)
      <div class="blocks-3">
          <img src="{{ Voyager::image( $post->image ) }}"/>
          <p class="date">{{ date('M j, Y', strtotime($post->created_at)) }}</p>
          <h3 class="title">{{ $post->title }}</h3>
          <p class="excerpt">{{ str_limit($post->excerpt, 100) }}</p>
          <a href="/{{ $post->category->slug }}/{{ $post->slug }}" class="see-more">see more</a>
      </div>
  @endforeach
</section>
<section class="container">
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
          <p class="text"> {!! $comment->comment !!}</p>
        </div>
      @endforeach
</section>
@stop
