<section class="container">
  <div class="grid-container">
  @foreach($tag->posts->slice(0, 3)->shuffle()  as $post)
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
