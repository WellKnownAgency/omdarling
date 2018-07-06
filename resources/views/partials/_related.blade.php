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
