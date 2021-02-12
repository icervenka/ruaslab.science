<div class="network-card {{ $item->svg_class }}">
  <div class="p-sm-2 py-2 px-0">
    <div class="card profile-card shadow-sm">
      <div class="card-img-block">
        <img class="img-fluid" src={{  URL::asset('images/'.$item->bg_image) }} alt="Profile background">
      </div>
      <div class="card-body">
        <img src={{  URL::asset('images/'.$item->profile_image) }} alt="Profile image" class="profile">
        <h5 class="card-title text-center">
          <span>{{  $item->first_name }}
            <span class="line-break">{{  $item->surname }}</span>
          </span>
        </h5>
        <p class="text-center m-0">{{  $item->position }}</p>
        <hr>
        <div class="text-center">
          <div class="col-12">
            <p><i class="fa fa-map-marker-alt"></i>
              {{  $item->address }}
          </div>
          <div class="col-12">
            <i class="fa fa-envelope"></i>
            {{  $item->email }}
          </div>
        </div>
        <hr>
      </div>
    </div>
  </div>
</div>
