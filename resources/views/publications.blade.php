@extends('page_template')

@section('page_header')
{{ URL::asset('images/page_header_publications.jpg') }}
@endsection

@section('page_title', 'PUBLISHED')

@section('page_content')
<section class="container-fluid">
  <div class="container px-0">

    <h1 class="pt-3">HIGHLIGHTS OF OUR WORK</h1>
    <hr class="hr-divider">

    @foreach($pubs_lab as $project)
      @include('partials.project_entry', $project)
    @endforeach

    <div class="py-3">
    <a href="https://scholar.google.com/citations?hl=en&user=c6NQ9FMAAAAJ">
      <button type="button" class="btn btn-block rounded-pill btn-more py-2">
        LIST OF ALL PUBLICATIONS <i class="fas fa-external-link-alt"></i>
      </button>
    </a>
    <!-- @foreach($pubs_collab as $project)
      @include('partials.project_entry', $project)
    @endforeach-->
    </div>
  </div>
</section>

<hr class="hr-divider">
<!-- maybe use plumx -->
<script type="text/javascript" src="https://cdn.plu.mx/widget-popup.js"></script>
<script type='text/javascript' src='https://d1bxh8uas1mnw7.cloudfront.net/assets/embed.js'></script>
@endsection
