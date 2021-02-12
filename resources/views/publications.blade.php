@extends('page_template')

@section('page_header')
{{ URL::asset('images/page_header_publications.jpg') }}
@endsection

@section('page_title', 'PUBLISHED')

@section('page_content')
<section class="container-fluid">
  <div class="container px-0">

    <h1 class="pt-3">FROM OUR LAB</h1>
    <hr class="hr-divider">

    @foreach($pubs_lab as $project)
      @include('partials.project_entry', $project)
    @endforeach

    <h1 class="pt-3">FROM COLLABORATORS</h1>
    <hr class="hr-divider">

    @foreach($pubs_collab as $project)
      @include('partials.project_entry', $project)
    @endforeach

  </div>
</section>

<hr class="hr-divider">
@endsection
