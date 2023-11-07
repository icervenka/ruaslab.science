@extends('page_template')

@section('page_header')
  {{ URL::asset('images/page_header_collaborators.jpg') }}
@stop

@section('page_title', 'COLLABORATORS')

@section('page_content')
<section class="container-fluid index">
  <div class="container px-0">

    <div class="row no-gutters">
      <div class="col-12">
        <p class="text-justify">Exercise affects the entire body. To efficiently
          develop our research projects, we collaborate with national and
          international specialists on different tissues and organs.</p>
      </div>
    </div>

    <div class="hide-in-small">
      <div class="row no-gutters">

        <div class="col-12 col-lg-3 col-md-3">
          @each('partials.network_card_profile', $metabolic_network, 'item')
        </div>

        <div class="col-12 col-lg-6 col-md-6 text-center">
          @include('network_svg')
        </div>

        <div class="col-12 col-lg-3 col-md-3">
          @each('partials.network_card_text', $metabolic_network, 'item')
        </div>

      </div>
    </div>

    <div class="hide-in-large pb-3">
      <div id="carousel-mt" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          @each('partials.network_card_carousel', $metabolic_network, 'item')
        </div>
        <a class="carousel-control-prev" href="#carousel-mt" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-mt" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

    </div>

  </div>
</section>

<hr class="hr-divider">
@stop
