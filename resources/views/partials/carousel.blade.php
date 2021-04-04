<div class="carousel-item">
  <a href={{ route('project', $item->layman_title_slug) }}>
    <img class="d-block w-100" alt={{ $item->header }} src={{ URL::asset('images/'.$item->image) }}>
    <div class="carousel-caption">
      <h4>{{ $item->header }}</h4>
      <p class="hide-in-small">{{ $item->text }}</p>
    </div>
  </a>
</div>
