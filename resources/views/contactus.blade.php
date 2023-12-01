@extends('page_template')

@section('page_header')
  {{ URL::asset('images/page_header_contactus.jpg') }}
@stop

@section('page_title', 'CONTACT US')

@section('page_content')
  <section class="container-fluid px-0">
    <div class="container px-0">
      <div class="row no-gutters">
        <div class="px-3 px-md-0">
          <h1 class="pt-3">Address</h1>
          <p class="text-justify">We have moved to the University of Michigan, Ann Arbor. Our visiting address is:
          </p>
          <p><b>Institute for Heart & Brain Health</b><br>
          University of Michigan Medical School<br>
          Department of Pharmacology<br>
          NCRC B25-2696<br>
          Ann Arbor, MI 48109-2800<br>
          USA<br></p>
        </div>
        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4042.1914242726725!2d-83.70758!3d42.300859!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883cae9d660c0f4d%3A0xbfc387f97096e917!2sNorth%20Campus%20Research%20Complex!5e1!3m2!1ssv!2sse!4v1700574979017!5m2!1ssv!2sse"
        frameborder="0" style="border:0;" allowfullscreen=""
        aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
  </section>

  <hr class="hr-divider">

  <section class="container-fluid px-0">
    <div class="container px-0">
      <div class="row no-gutters">
        <h1 class="pt-3"></h1>
        <img class="img-fluid" src={{ URL::asset('images/umich_inside.jpg') }} alt="">
      </div>
    </div>
  </section>

  <hr class="hr-divider">
@stop
