<div class="col-lg-2 col-md-3 col-sm-4 col-6 d-flex">
  <div class="card funding-card">
    <a href="{{ $agency->link }}" target="_blank">
      <img class="card-img-top" src={{ URL::asset("images/".$agency->img)}} alt="Agency Logo">
      <div class="card-body text-center">
        <span class="card-title">{{ $agency->name }}</span>
        <p class="card-text">{{ $agency->year_start }} - {{ $agency->year_end }}</p>
        <hr>
        <p class="card-text">
          {{ $agency->type }}<br>
        </p>
      </div>
    </a>
  </div>
</div>
