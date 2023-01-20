@extends('page_template')

@section('page_header')
  {{ URL::asset('images/page_header_gallery.jpg') }}
@stop

@section('page_title', 'GALLERY')

@section('page_content')

<section class="container-fluid">
  <div class="container px-0">
    <div class="row no-gutters">
      <div class="pb-3">&nbsp;</div>
      <div id="basic-gallery" class="py-3">

        @each('partials.gallery_item', $gallery, 'item')

      </div>
    </div>
  </div>
</section>
@stop
