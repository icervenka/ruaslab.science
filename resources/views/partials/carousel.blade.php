<div class="carousel-item">
  <img class="d-block w-100" alt={{ $item->header }} src={{ URL::asset('images/'.$item->image) }}>
  <div class="carousel-caption">
    <h4>{{ $item->header }}</h4>
    <p class="hide-in-small">{{ $item->text }}</p>
  </div>
</div>
