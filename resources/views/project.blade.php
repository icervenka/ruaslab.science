@extends('page_template')

@section('page_header')
{{ URL::asset('images/page_header_publications.jpg') }}
@endsection

@section('page_title', $project->layman_title)

@section('page_content')
<section class="container-fluid">
  <div class="container px-0">

    @include('partials.project_entry_footer', $project)

    <div class="row no-gutters">
      <div class="col-lg-6 col-sm-12">
        <div class="py-2 pr-md-2">
          <img class="img-fluid" src={{ URL::asset('images/gpr35_graphical_abstract.jpg') }} alt="">
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="pl-md-2 pt-2 pb-4">
        <p class="text-justify">{{$project->layman_abstract}}</p>
        <div class="px-3 border-left border-dark">
          @if($project->completion == 100)
          <a href="{{$project->pubmed_link}}" target="_blank">
            <h5 class="publication-name-link">
              {{$project->title}}
            </h5>
          </a>
          <p class="text-muted">
            {{$project->author_list}}
          </p>
          <p class="text-muted">
            {{$project->bibliography}}
          </p>
          @endif
        </div>

      </div>
      </div>
    </div>

</section>

<hr class="hr-divider">

<section class="container-fluid py-2">
  <div class="container px-0">
    <div class="row no-gutters">
      <div class="col-12">
        <div class="text-center">

          <div class="badge-list-title">Project lead</div>
          <div class="d-inline-flex flex-wrap">
            @foreach($leads as $person)
              @include('partials.profile_badge', array('person' => $person, 'color' => '#995a5a'))
            @endforeach
          </div>

          <div class="badge-list-title">Contributors</div>
          <div class="d-inline-flex flex-wrap">
            @foreach($contribs as $person)
              @include('partials.profile_badge', array('person' => $person, 'color' => '#5e7fa0'))
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<hr class="hr-divider">
@endsection
