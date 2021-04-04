<div class="carousel-item">
  <div class="p-0 rounded border border-dark bg-white">
    <div class="row no-gutters">
      <div class="h-100" style="max-width: 105px;">
        <img class="rounded img-fluid" src={{  URL::asset('images/'.$item->bg_image) }} alt="Profile Image">
      </div>
      <div class="py-1 px-2">
        <b>{{ $item->first_name }} {{ $item->surname }}</b><br>
        {{ $item->address }}<br>
        {{ $item->email }}<br>
        {{ $item->title }}
      </div>
    </div>
  </div>
</div>
