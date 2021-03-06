@extends('mobile/blogmain')

@section('title', "$post->title | OmDarling Blog")

@section('description', "$post->meta_description")

@section('keywords', "$post->meta_keywords")

@section('image', "https://omdarling.com/storage/$post->image")

@section('url', "{{url()->current()}}")

@section('created', "$post->created_at")

@section('updated', "$post->updated_at")

@section('category', "$post->category->name")

@section('content')
<header class="container">
  <div onclick="javascript:history.go(-1)" class="back">
    <i  class="fas fa-back fa-arrow-left"></i>
    back
  </div>
  <div style="margin-top: 20px; margin-bottom: 20px;">
    <span class="tags">tags</span>
    @foreach ($post->tags as $tag)
    <a href="/tag/{{ $tag->slug }}" style="text-decoration: none;"><span class="tag">{{ $tag->name }}</span></a>
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
@include('mobile/partials/_profile-pic')
<section class="container">
  <div class="share">
    Share <a href="https://www.facebook.com/sharer.php?u={{ urlencode(Request::fullUrl()) }}"><i  class="fab fa-shares fa-facebook-f"></i></a>
    <a href="https://twitter.com/intent/tweet?url={{ urlencode(Request::fullUrl()) }}"><i  class="fab fa-shares fa-twitter"></i></a>
    <a href="https://plus.google.com/share?url={{ urlencode(Request::fullUrl()) }}"><i class="fab fa-shares fa-google-plus-g"></i></a>
  </div>
</section>
<section class="container">
  <div class="related">
    Related
  </div>
</section>
@include('mobile/partials/_related')
<section class="container">
    <form action="/posts/{{ $post->id }}/comments" method="POST">
        {{csrf_field()}}
            <div class="comments">

              <input class="comment-name" type="text" name="name" placeholder="Your name" required>

              <input class="comment-email" type="email" name="email" placeholder="Your email" required>

              <textarea class="comment" type="text" name="comment" placeholder="leave a comment..." required></textarea>

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
