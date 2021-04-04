@extends('page_template')

@section('page_header')
  {{ URL::asset('images/page_header_team.jpg') }}
@endsection

@section('page_title', 'OUR TEAM')

@section('page_content')
<section class="container-fluid">
  <div class="container px-0">
    
    <div class="py-2 px-0, px-md-2">
      <img class="img-fluid rounded" src={{ URL::asset('images/group_photo.jpg') }} alt="Group photo" />
    </div>

    <div class="row no-gutters">

      @foreach($team as $person)

      <div class="col-lg-4 col-md-6 col-sm-12">
        <a href="{{ route('person', $person->surname) }}">
          <div class="p-sm-2 py-2 px-0 d-flex">
          <div class="card profile-card shadow-sm">
            <div class="card-img-block">
              <img class="img-fluid" src={{ URL::asset('images/'.$person->bg_image) }} alt="Profile background">
            </div>
            <div class="card-body">
              <img src={{ URL::asset('images/thumb_'.$person->photo) }} alt="Profile image" class="profile" />
              <h5 class="card-title text-center"><span>{{ $person->first_name }}
                <span class="line-break">{{ $person->surname }}</span></span></h5>
              <div class="text-center">{{ $person->position }}</div>
              <hr>
              <div class="text-center">
                <div class="col-12">
                  <p><i class="fa fa-map-marker-alt"></i>
                    {{ $person->address_city }}, {{ $person->address_state }}
                </div>
                <div class="col-12">
                  <i class="fa fa-envelope"></i>
                  {{ $person->email }}
                </div>
              </div>
              <hr>
            </div>
          </div>
          </div>
        </a>
      </div>
      @endforeach

    </div>
  </div>
</section>
@endsection
