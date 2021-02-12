<div class="row no-gutters">
  <div class="container p-0 text-muted">
    <hr>
    <div class="flex-row no-gutter d-flex justify-content-between">
      <div>By {{ $project->author }}</div>
      <div class="d-inline-flex flex-wrap">
        @foreach($project->tags as $tag)
        <a href="{{ url('results/'.$tag->name) }}">
          <div class="tag rounded">{{ $tag->name }}</div>
        </a>
        @endforeach
      </div>
      <div>
        <a href="#"><i class="fab fa-facebook-square publication-icon icon-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter-square publication-icon icon-twitter"></i></a>
        <a href="#"><i class="fab fa-linkedin publication-icon icon-linkedin"></i></a>
      </div>
    </div>
    <hr>
  </div>
</div>
