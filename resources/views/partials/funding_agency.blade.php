<div class="col-lg-3 col-md-4 col-sm-6 col-12 d-flex">
  <div class="card funding-card">
    <a href="{{ $agency->link }}" target="_blank">
      <img class="card-img-top" src={{ URL::asset("images/".$agency->img)}} alt="Agency Logo">
      <div class="card-body text-center">
        <h5 class="card-title">{{ $agency->name }}</h5>
        <p class="card-text">{{ $agency->year_start }} - {{ $agency->year_end }}</p>
        <hr>
        <p class="card-text">
          <b>{{ $agency->type }}</b><br>
        </p>
      </div>
    </a>
  </div>
</div>
