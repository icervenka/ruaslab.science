@extends('page_template')

@section('page_header')
  {{ URL::asset('images/page_header_funding.jpg') }}
@stop

@section('page_title', 'FUNDING')

@section('page_content')
  <section class="container-fluid">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3">Enable Research</h1>
        <p class="text-justify">Nibh sed pulvinar proin gravida hendrerit lectus a. Sit amet volutpat
          consequat mauris nunc congue nisi. Luctus accumsan tortor posuere ac ut.
          Id faucibus nisl tincidunt eget nullam non. Sapien nec sagittis aliquam
          malesuada bibendum arcu vitae elementum. A lacus vestibulum sed arcu non.
        </p>
      </div>
    </div>
  </section>

  <hr class="hr-divider">

  <section class="container-fluid">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3">Cost Breakdown</h1>
        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Faucibus et molestie
          ac feugiat sed lectus. Nunc pulvinar sapien et ligula. Phasellus faucibus
          scelerisque eleifend donec. Habitant morbi tristique senectus et netus et
          malesuada fames ac. Lobortis elementum nibh tellus molestie nunc non.
          Mattis vulputate enim nulla aliquet porttitor. Vestibulum lorem sed risus
          ultricies tristique nulla aliquet. Nibh mauris cursus mattis molestie.
          Sit amet est placerat in egestas erat.
        </p>
      </div>
    </div>
  </section>

  <hr class="hr-divider">

  <section class="container-fluid">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3">Take Your Pick</h1>
        <p class="text-justify">Non tellus orci ac auctor augue mauris augue neque. Pulvinar neque
          laoreet suspendisse interdum consectetur. Mauris vitae ultricies leo
          integer. Praesent elementum facilisis leo vel. Purus in mollis nunc sed id
          semper. Faucibus nisl tincidunt eget nullam non nisi. Urna et pharetra
          pharetra massa. At quis risus sed vulputate odio ut enim blandit.
          Malesuada fames ac turpis egestas maecenas. Turpis massa sed elementum
          tempus egestas sed. Pellentesque diam volutpat commodo sed egestas egestas
          fringilla phasellus faucibus.
        </p>
      </div>
    </div>
  </section>

  <hr class="hr-divider">

  <section class="container-fluid">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3">How To Support</h1>
        <p class="text-justify">Id aliquet risus feugiat in ante metus. Consectetur adipiscing elit duis
          tristique sollicitudin nibh sit amet. Amet nisl suscipit adipiscing
          bibendum. At consectetur lorem donec massa sapien. Viverra nam libero
          justo laoreet sit amet. Faucibus turpis in eu mi bibendum neque egestas.
          Ac turpis egestas integer eget aliquet. Eget arcu dictum varius duis at
          consectetur. Hendrerit dolor magna eget est lorem ipsum dolor sit amet.
          Orci dapibus ultrices in iaculis nunc sed. Amet commodo nulla facilisi
          nullam vehicula ipsum a. Gravida arcu ac tortor dignissim. Sed turpis
          tincidunt id aliquet risus feugiat in ante metus. In pellentesque massa
          placerat duis ultricies lacus sed turpis. Vitae aliquet nec ullamcorper
          sit amet risus nullam eget. Vitae et leo duis ut diam quam.
        </p>
      </div>
    </div>
  </section>

  <hr class="hr-divider">

  <section class="container-fluid">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3">Obtained Grants</h1>
        <p class="text-justify">Aenean pharetra magna ac placerat vestibulum lectus mauris. Elementum
          tempus egestas sed sed risus pretium quam vulputate. Faucibus pulvinar
          elementum integer enim neque. Cras semper auctor neque vitae. Nisl
          tincidunt eget nullam non nisi est. Sed adipiscing diam donec adipiscing
          tristique risus. Orci porta non pulvinar neque laoreet suspendisse
          interdum consectetur. Arcu ac tortor dignissim convallis aenean et tortor.
          Est velit egestas dui id ornare arcu odio ut. Purus gravida quis blandit
          turpis cursus in. Sit amet facilisis magna etiam tempor. Nisl pretium
          fusce id velit ut tortor pretium viverra. Lorem ipsum dolor sit amet
          consectetur.
        </p>
      </div>
      <div class="row no-gutters pb-2">

        @each('partials.funding_agency', $funding_agencies, 'agency')

      </div>
    </div>

  </section>

  <hr class="hr-divider">
@stop
