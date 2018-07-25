<section class="container">
  @foreach($tag->posts->slice(0, 3)  as $post)
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
