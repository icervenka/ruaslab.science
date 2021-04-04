@extends('page_template')

@section('page_header')
{{ URL::asset('images/page_header_tags.jpg') }}
@endsection

@section('page_title', $tag)

@section('page_content')
<section class="container-fluid">
  <div class="container px-0">

    @foreach($projects as $project)
      @include('partials.project_entry', $project)
    @endforeach

  </div>
</section>

<hr class="hr-divider">
<script type="text/javascript" src="//cdn.plu.mx/widget-popup.js"></script>
@endsection
