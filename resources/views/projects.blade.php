@extends('page_template')

@section('page_header')
{{ URL::asset('images/page_header_projects.jpg') }}
@endsection

@section('page_title', 'PROJECTS')

@section('page_content')
<section class="container-fluid">
  <div class="container px-0">
    <p class="text-justify py-5">Our research projects are designed to understand how
      the body changes with disease and how physical activity and exercise can
      help prevent or correct those changes. Project development is also used to
      train the future generations of scientists in this field.</p>
    @foreach($projects as $project)
      @include('partials.project_entry', $project)
    @endforeach
  </div>
</section>

<hr class="hr-divider">

@endsection
