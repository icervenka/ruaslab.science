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
        @if($person->current == 1)
          @include('partials.person_card', array($person)) 
        @endif
      @endforeach
    </div>

    <h1 class="pt-3">ALUMNI</h1>
    <hr class="hr-divider">

    <div class="row no-gutters">
      @foreach($team as $person)
        @if($person->current == 0)
          @include('partials.person_card', array($person)) 
        @endif
      @endforeach
    </div>

  </div>
</section>
@endsection
