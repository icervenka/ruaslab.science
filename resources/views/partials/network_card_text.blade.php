<div class="network-card {{ $item->svg_class }}">
  <div class="p-sm-2 py-2 px-0">
    <div class="card profile-card shadow-sm card-body">
      <h5 class="card-title text-center">
        {{ $item->title }}
      </h5>
      <hr>
      <p class="text-justify">
        {!! $item->text !!}
      </p>
    </div>
  </div>
</div>
