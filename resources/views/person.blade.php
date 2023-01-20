@extends('page_template')

@section('page_header')
  {{ URL::asset('images/'.$person_data->bg_image) }}
@endsection

@section('page_title')
  {{ $person_data->first_name }} {{ $person_data->surname }}
@endsection

@section('page_subtitle')
  {{ $person_data->position }}
@endsection

@section('page_content')
<section class="container-fluid">
  <div class="container px-0 py-3">
    <div class="row">
      <div class="col-lg-4 col-sm-12 px-3">
        <img src={{ URL::asset('images/'.$person_data->photo) }} class="img-fluid rounded" />

        @foreach($person_data->skills as $skill)
        <div class="row no-gutters pt-4">
          <div class="col-10">
            <span class="skill-text">{{ $skill->name }}</span>
            <div class="progress">
              <div class="progress-bar bg-skill-progress-{{ ($loop->iteration % 5) + 1}}"
                    role="progressbar" style="width: {{ $skill->percentage }}%;"
                    aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
          <div class="col-2 text-right skill-percentage">
            <span class="skill-text">{{ $skill->percentage }}%</span>
          </div>
        </div>
        @endforeach

      </div>

      <div class="col-lg-8 col-sm-12 px-3">

        <div class="row no-gutters pb-2 py-md-2 pt-5 ">
          @each('partials.person_links', $person_data->links, 'item')
        </div>

        <hr>

        <div class="row no-gutters py-2">
        @foreach($person_data->trivia as $trivia)
          <div class="col-lg-3 col-sm-4 person-trivia-name">
            {{ $trivia->name }}
          </div>
          <div class="col-lg-9 col-sm-8 person-trivia-text">
            {{ $trivia->value }}
          </div>
        @endforeach
        </div>

        
        @if ($person_data->quote_text)
        <hr>
        <div class="row no-gutters py-2">
          <div class="quote w-100">
            <p class="lead">
              {{ $person_data->quote_text }}
              <i class="fa fa-quote-right pl-3" style="color:#2F4F4F;position:absolute;font-size:52px;"></i>
            </p>
            <footer class="blockquote-footer">{{ $person_data->quote_source }}</footer>
          </div>
        </div>
        @endif

        <div class="pt-2">
          <p class="text-justify">{!! $person_data->bio_text !!}</p>
        </div>
        <hr>

        @php
        $num_projects = 0;
        $num_publications = 0;
        foreach ($person_data->projects as $project) {
          if ($project->completion  == 100) {
            $num_publications += 1;
          } else {
            $num_projects +=1;
          }
        }
        @endphp

        @if ($num_projects > 0)
        <h5 class="badge-list-title">Projects</h5>
        <div class="d-flex no-gutters flex-wrap">
          @foreach($person_data->projects as $project)
            @if ($project->completion < 100)
              @include('partials.project_badge', $project)
            @endif
          @endforeach
        </div>
        @endif

        @if ($num_publications > 0)
        <h5 class="badge-list-title">Publications</h5>
        <div class="d-flex no-gutters flex-wrap">
          @foreach($person_data->projects as $project)
            @if ($project->completion === 100)
              @include('partials.project_badge', $project)
            @endif
          @endforeach
        </div>
        @endif
      
      </div>
    </div>
  </div>
</section>
@endsection
